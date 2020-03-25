<?php

require_once './vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;
use Google\Cloud\Firestore\FieldValue;

class Firestore{

    protected $db;
    protected $name;

    public function __construct(string $collection){
        $this->db = new FirestoreClient([
            'projectId'=> 'fir-php-4bdd0'
        ]);
        $this->name=$collection;
    }

    public function getDocument(string $name){

        try {
            if($this->db->collection($this->name)->document($name)->snapshot()->exists()){
                return $this->db->collection($this->name)->document($name)->snapshot()->data();
        }
        else{
            throw new Exception('Document not found.');
        }

        } catch (Exception $exception) {
            return $exception->getMessage();
        }

    }

    // Don't know why i created this in the first place :)
    public function getWhere(string $field, string $operator, $value)
    {
        $arr = [];
        $query = $this->db->collection($this->name)->where($field, $operator, $value)->documents()->rows();
        if (!empty($query)) {
            foreach ($query as $value) {
                $arr[] = $value->data();
            }
        }
        return $arr;
    }

    // Creates a document in the specified collection at root level. If $data is empty (by default), a null document is created. 
    // Else, a document will be created along with its data
    public function createDocument(string $collectionName='eventManage',string $name,array $data=[]){
        try {
            if(!($this->db->collection($collectionName)->document($name)->snapshot()->exists())){
                    $this->db->collection($collectionName)->document($name)->set($data);
                    return true;       
        }
            else{
                throw new Exception('Document exists.');
            }

        } catch (Exception $exception) {
            return $exception->getMessage();
        }

    }

    // Updates field values, and if the field doesn't exist, it will be created in the document.
    public function updateDocument($docName,array $newData){

        try {
            if($this->db->collection($this->name)->document($docName)->snapshot()->exists()){
                $this->db->collection($this->name)->document($docName)->update($newData);
                return true;
        }
        else{
            throw new Exception('Document not found.');
        }

        } catch (Exception $exception) {
            return $exception->getMessage();
        }

    }
        // Creates a collection
        public function createCollection(string $name,string $doc_name,array $data=[]){
        try {
            $this->db->collection($name)->document($doc_name)->create($data);
            return true;
        } 
        catch (Exception $exception) {
            return $exception->getMessage();
            }
        }


        public function createSubCollection(string $name,string $doc_name,string $sub_doc,array $data=[]){
            try {
                $this->db->collection($this->name)->document($doc_name)->collection($name)->document($sub_doc)->set($data);
                return true;
            } catch (Exception $exception) {
                return $exception->getMessage();
            }
        }

        // Drops a document
        public function dropDocument(string $docName){
            try {
                if($this->db->collection($this->name)->document($docName)->snapshot()->exists()){
                    $this->db->collection($this->name)->document($docName)->delete();
                    return true;
            }
            else{
                throw new Exception('Document not found.');
            }

            } 
            catch (Exception $exception) {
                return $exception->getMessage();
            }

        }

        // Deletes specified collection and its documents
        public function dropCollection(string $collectionName){

            try {

              $documents= $this->db->collection($collectionName)->limit(4)->documents();
              while (!$documents->isEmpty()) {
                  foreach ($documents as $item){
                      $item->reference()->delete();
                    }
                }
                return true;
            } 
            catch (Exception $exception) {
                return $exception->getMessage();
            }
        }

        // Deletes specified field in specified document
        public function deleteFields(string $docName,string $field){

            try {
                if($this->db->collection($this->name)->document($docName)->snapshot()->exists()){
                    $this->db->collection($this->name)->document($docName)->update([
                        ["path"=>$field,
                         "value"=>FieldValue::deleteField()]
                    ]);
                    return true;
            }
            else{
                throw new Exception('Document not found.');
            }

            } catch (Exception $exception) {
                return $exception->getMessage();
            }

        }

        // Retrieves field values in a document
        public function retrieveField(string $docName){
            try {
                if ($this->db->collection($this->name)->document($docName)->snapshot()->exists()) {
                    
                }
            } 
            catch (Exception $exception) {
                return $exception;
            }
        }

}