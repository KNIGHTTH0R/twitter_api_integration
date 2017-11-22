<?php 

class SaveTweet extends CI_Model{
	public function save($tweets){
		$data=array();
			foreach ($tweets as $tweet) {
				
				$data['text']=$tweet->text;
				$data['tweet_id']=$tweet->id;
				$match=$this->db->where('tweet_id',$data['tweet_id'])
 								 ->get('tweets');
 				
 				
 				if($match->num_rows()>0){
 					
 				}else{
 				$this->db->insert('tweets',$data);

 				}

				
			}
			
	}
}