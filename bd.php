<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","flavi","zzxxzz","channel") or die("Error " . mysqli_error($connection));
	
	
	/**
	class Database {
		
		 $db_host = 'localhost'; 
		 $db_user = 'flavi'; 
		 $db_pass = 'pass'; 
		 $db_name = 'channel'; 
	 
public function connect()
    {
        if(!$this->con)
        {
            $myconn = @mysql_connect($this->db_host,$this->db_user,$this->db_pass);
            if($myconn)
            {
                $seldb = @mysql_select_db($this->db_name,$myconn);
                if($seldb)
                {
                    $this->con = true; 
                    return true; 
                } else
                {
                    return false; 
                }
            } else
            {
                return false; 
            }
        } else
        {
            return true; 
        }
    }
		
		
		
		

		
	// DB disconnect
	public function disconnect()
	{
    if($this->con)
    {
        if(@mysql_close())
        {
                       $this->con = false; 
            return true; 
        }
        else
        {
            return false; 
        }
    }
	}
		
		
	}// end class
*/
	
?>
