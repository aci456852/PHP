<?php
	class MessageBoard
	{
		private $filename="./message.txt";
		public function getall()
		{
			$messages=file($this->filename);
			return $messages;
		}
		public function handle_add($name,$avatar,$message)
		{
			$line=$name.'@'.$avatar.'@'.$message;
			if(file_exists($this->filename)){
				$origin_messages=file_get_contents($this->filename);
				file_put_contents($this->filename, $origin_messages."\r\n".$line);
			}
			else{
				file_put_contents($this->filename, $line);
			}
		}
		public function handle_delete($name,$avatar,$message)
		{
			$line=$name.'@'.$avatar.'@'.$message;
			$messages=file($this->filename);
			$newMessages=[];
			foreach ($messages as $value) {
				if(trim($value)!=trim($line))
				{
					$newMessages[]=trim($value);
				}
			}
			file_put_contents($this->filename, implode("\n", $newMessages));
		}
		public function handle_reply($name,$avatar,$message,$replymessage)
		{
			$line=$name.'@'.$avatar.'@'.$message;
			$messages=file($this->filename);
			$newMessages=[];
			foreach ($messages as $value) {
				if(trim($value)!=trim($line))
				{
					$newMessages[]=trim($value);
				}
				else
				{
					$newMessages[]=trim($line.'@'.$replymessage);
				}
			}
			file_put_contents("./message.txt", implode("\n", $newMessages));
			}
	}
?>