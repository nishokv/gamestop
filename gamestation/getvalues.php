<?php
$con=mysql_connect("localhost","root","Asdf@1234")or die("couldnotconnect");
mysql_select_db('game',$con);

function getdesc($imageid)
{


$selquery="select gamename,id,image_name,description,price from product_images where id='$imageid';";

$reslt=mysql_query($selquery);
if(mysql_num_rows($reslt))
{
while($extract =mysql_fetch_array($reslt))
{$img['id']=$extract['id'];

$img['description']=$extract['description'];
$img['price']=$extract['price'];
$img['gamename']=$extract['gamename'];
return $img;
}

}

}

function getbyname($gamename)
{
$selquery="select id,gamename from product_images where gamename like '%$gamename%';";

$reslt=mysql_query($selquery);
if(mysql_num_rows($reslt))
{
	$i=0;
while($extract =mysql_fetch_array($reslt))
{
	$id[$i++]=$extract['id'];


	}

return $id;		
}		
}


function getbytype($type)
{
$selquery="select id from product_images where type like '%$type%';";

$reslt=mysql_query($selquery);
if(mysql_num_rows($reslt))
{
	$i=0;
while($extract =mysql_fetch_array($reslt))
{$id[$i++]=$extract['id'];

}

return $id;	
	
}		
}

function getbygenre($genre)
{
$selquery="select id from product_images where genre like '%$genre%';";
$i=0;
$reslt=mysql_query($selquery);
if(mysql_num_rows($reslt))
{$id;
while($extract =mysql_fetch_array($reslt))
{$id[$i]=$extract['id'];
}
return $id;	
}

			}
			
			function getbydescription($description)
{
$selquery="select id from product_images where description like '%$description%';";

$reslt=mysql_query($selquery);
if(mysql_num_rows($reslt))
{
	$i=0;
while($extract =mysql_fetch_array($reslt))
{$id[$i++]=$extract['id'];
}	
return $id;

}
			}

function getcart($userid)
{
	
	$selquery="select id,gamename,type, genre ,price ,count(*) as count from product_images p,cart c where c.userid='$userid' and c.status='new' and c.productid=p.id group by gamename,type, genre" ;  

	$reslt=mysql_query($selquery);
	
	$i=0;
	$bigcart=null;
while($extract =mysql_fetch_array($reslt))
{
	$cart['gamename']=$extract['gamename'];
    $cart['type']=$extract['type'];
	$cart['genre']=$extract['genre'];
	$cart['price']=$extract['price'];
	$cart['count']=$extract['count'];
	$cart['id']=$extract['id'];
//	echo $extract['count'];
	$bigcart[$i++]=$cart;

	
}
//if($bigcart!=null)
return $bigcart;

}			

function getallgames()
{
	$selquery="select id,gamename from product_images " ;  

	$reslt=mysql_query($selquery);
	$i=0;
	while($extract =mysql_fetch_array($reslt))
{
$count[$i]=$extract['id'];
    
	$i++;
	
}
		return $count;	
}
$k=getbytype('pc');
$c=getcart('pradeep');
//echo count($c);
for($i=0;$i<count($c);$i++)
{
	$c1=$c[$i];
	
	//echo $c1['type'];
	//echo $c1['count'];
}


//for($i=0;$i<count($k);$i++)
	//echo $k[$i]."<br/>";

	


	?>