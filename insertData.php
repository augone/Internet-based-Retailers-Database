<?php
	include 'dbconnect.php';
	if(mysql_select_db("phasefive",$con))
		echo "all right";
	mysql_query ("insert into CUSTOMER 
values(1234,\'Fan bai\',\'6144415645\',1,2,3,\'bai.313@ous.edu\',123,123456789,10001);",$con);
echo "asdfasdf";
	$dataArray = array("insert into CUSTOMER 
		values(1234,\'Fan bai\',\'6144415645\',1,2,3,\'bai.313@ous.edu\',123,123456789,10001);","
		insert into CUSTOMER 
		values(1235,\'Wen Zhang\',\'6143902098\',3,4,3,\'zhang.6344@ous.edu\',123,123456789,10002);","
		insert into CUSTOMER 
		values(1237,\'Xiaodong Ma\',\'6142826246\',5,5,5,\'ma.1110@ous.edu\',123,123456791,10003);","
		insert into PURCHASE_RECORD 
		values(10001,cast(curdate() as char(20)),213,\'milk\',2,1234);","
		insert into PURCHASE_RECORD 
		values(10002,cast(curdate() as char(20)),243,\'GUM\',4,1235);","
		insert into PURCHASE_RECORD 
		values(10003,cast(curdate() as char(20)),2345,\'BEEF\',6,1237);","
		insert into SHOP_LEVEL values (1,\'very poor\',\'very poor\',\'very poor\' );","
		insert into SHOP_LEVEL values (2,\'poor\',\'poor\',\'poor\');","
		insert into SHOP_LEVEL values (3,\' not bad\',\'not bad\',\'not bad\') ;","
		insert into SHOP_LEVEL values (4,\'good\', \'good\', \'good\');","
		insert into SHOP_LEVEL values (5,\'very good\', \'very good\', \'very good\');","
		insert into SUPPLIER values (001,\'Apple\',\'Seattle,USA\',\'6143903056\',\'apple@osu.edu\',10001);","
		insert into SUPPLIER values (002,\'H&M\',\'Los Angeles,USA\',\'6143904567\',\'hm@osu.edu\',10002);","
		insert into SUPPLIER values (003,\'Nike\',\'Washington,USA\',\'6142803423\',\'nike@osu.edu\',10003);","
		insert into SUPPLIER values (004,\'Addidas\',\'NewYork,USA\',\'6142038960\',\'addidas@osu.edu\',10003);","
		Insert into WAREHOUSE values(101,\'BIGKING\',\'6142826247\',\'maa.6@osu.edu\',001);","
		Insert into WAREHOUSE values(102,\'HOO\',\'6142824247\',\'maa.45@osu.edu\',003);","
		Insert into WAREHOUSE values(103,\'DOKER\',\'6142726247\',\'maa.57@osu.edu\',002);","
		Insert into WAREHOUSE values(104,\'YOU\',\'6142826247\',\'maa.586@osu.edu\',001);","
		Insert into WAREHOUSE values(105,\'SDF\',\'6142820247\',\'maa.56@osu.edu\',003);","
		insert into SHOP values (201,\'shop201@osu.edu\',\'Seattle,USA\',1,103,\'www.shop201.com\');","
		insert into SHOP values (202,\'shop202@osu.edu\',\'Seattle,USA\',3,104,\'www.shop202.com\') ;","
		insert into SHOP values(203,\'shop203@osu.edu\',\'Washington,USA\',5,101,\'www.shop203.com\');","
		insert into SHOP values (204,\'shop204@osu.edu\',\'Beijing,CN\',3,104,\'www.shop204.com\') ;","
		insert into SHOP values(205,\'shop205@osu.edu\',\'Shanghai,CN\',5,101,\'www.shop205.com\');","
		insert into PRODUCT values (0001,\'milk\',3.28,2.15,\'good\',\'03/23/2015\',004);","
		insert into PRODUCT values (0002,\'swimsuit\',52.32 ,34.23,\'good\',\'04/26/2015\',002);","
		insert into PRODUCT values (0003,\'coat\',102.43,89.45,\'good\',\'05/28/2015\',004);","
		insert into PRODUCT values (0004,\'macbook\',1799 ,1599,\'good\',\'10/13/2015\',001);","
		insert into PRODUCT values (0005,\'ipad\',600 ,450,\'good\',\'09/28/2015\',001);","
		insert into PRODUCE values (0001,001);","
		insert into PRODUCE values (0002,002);","
		insert into PRODUCE values (0003,003);","
		insert into PRODUCE values (0004,004);","
		insert into PRODUCE values (0005,002);","
		insert into ACTIVITY values (201,\'Black on Friday\',\'11/24/2015\',\'PROMOTION\');","
		insert into ACTIVITY values (202,\'Christmas Deal\',\'12/25/2015\',\'PROMOTION\');","
		insert into ACTIVITY values (203,\'Halloween Deal\',\'10/31/2015\',\'PROMOTION\');","
		insert into MAINTAIN_PRODUCT values (203,001);","
		insert into MAINTAIN_PRODUCT values (201,003);","
		insert into MAINTAIN_PRODUCT values (205,004);","
		insert into MAINTAIN_PRODUCT values (202,001);","
		insert into MAINTAIN_PRODUCT values (204,004);","
		insert into SALE values (0001, 201) ;","
		insert into SALE values (0002, 202);","
		insert into SALE values (0003, 203);","
		insert into SALE values (0004, 204);","
		insert into SALE values (0005, 205);","
		insert into EMPLOYEE values (401, 416401500, \'David\', \'HR 612\', \'fasdf@gmail.com\', \'4235356343\', \'202\') ;","
		insert into EMPLOYEE values (402, 416464531, \'Steve\', \'SC 509\', \'gaserf@gmail.com\', \'7345652345\', \'204\') ;","
		insert into EMPLOYEE values (403, 416856752, \'Ellen\', \'SA 618\', \'awer@gmail.com\', \'4735662444\', \'205\') ;","
		insert into EMPLOYEE values (404, 416809825, \'James\', \'HR 520\', \'hertgd@gmail.com\', \'5134564352\', \'203\');"," 
		insert into EMPLOYEE values (405, 416473456, \'Fall\', \'HD 415\', \'gweba@gmail.com\', \'2723452348\', \'202\');","
		insert into EMPLOYEE values (406,416465879,\'Eva\',\'SC 798\',\'goos@gmail.com\',\'2723862348\',\'201\' );","
		insert into EMPLOYEE values (407, 416473098, \'Aven\', \'HD 467\', \'9aksdj@gmail.com\', \'6143838678\', \'202\');","
		insert into EMPLOYEE values (408, 438673456, \'Hover\', \'CD 589\', \'ads4@gmail.com\', \'6873838678\', \'203\');","
		insert into EMPLOYEE values (409, 439553456, \'Aprone\', \'LA 907\', \'7mm@gmail.com\', \'6147838678\', \'203\');","
		insert into EMP_ROLE values (401,\'Manager\',8 ,4000);","
		insert into EMP_ROLE values (402,\'Pre_sale\',8 ,3000);","
		insert into EMP_ROLE values (403,\'Technical Service \',8 ,3000);","
		insert into EMP_ROLE values (404,\'After_sale\',4 ,1500);","
		insert into EMP_ROLE values (405,\'Accountant\',7 ,7000);","
		insert into EMP_ROLE values (406,\'Manager\',6 ,4000);","
		insert into EMP_ROLE values (407,\'Accountant\',8 ,3000);","
		insert into EMP_ROLE values (408,\'Technical Service \',8 ,3000);","
		insert into EMP_ROLE values (409,\'After_sale\',7 ,4000);","
		insert into EMP_ROLE values (409,\'Manager\',7 ,4000);","
		insert into EMP_ROLE values (401,\'After_sale\',4 ,400);","
		insert into EMP_ROLE values (407,\'Manager\',8 ,3000);","
		insert into EMP_ROLE values (408,\'Manager \',8 ,3000);","
		insert into EMP_ROLE values (403,\'Pre_sale \',8 ,3000);","
		insert into EMP_ROLE values (404,\'Pre_sale\',4 ,1500);","
		insert into EMP_ROLE values (405,\'Pre_sale\',7 ,7000);","
		insert into EMP_ROLE values (408,\'Pre_sale\',8 ,3000);","
		insert into EMP_ROLE values (409,\'Pre_sale\',7 ,4000);","
		insert into EMP_ROLE values (406,\'Accountant\',6 ,4000);","
		insert into EMP_ROLE values (408,\'Accountant\',8 ,3000);","
		insert into EMP_ROLE values (409,\'Accountant\',7 ,4000);","
		insert into EMP_ROLE values (401,\'Accountant\',4 ,400);","
		insert into EMP_ROLE values (408,\'After_sale\',8 ,3000);","
		insert into SALES_RETURN values (201,003);","
		insert into SALES_RETURN values (202,001);","
		insert into SALES_RETURN values (203,001);","
		insert into SALES_RETURN values (204,004);","
		insert into SALES_RETURN values (205,004);","
		insert into DELIVER_GOODS values (201,003);","
		insert into DELIVER_GOODS values (202,001);","
		insert into DELIVER_GOODS values (203,001);","
		insert into DELIVER_GOODS values (204,004);","
		insert into DELIVER_GOODS values (205,004);","
		insert into BROWSING_HISTORY values (1234, \'basketball shoes\', \'Nike\', \'2015-5-25 12:10:42\');","
		insert into BROWSING_HISTORY values (1235, \'T-shirt\', \'Adidas\', \'2015-7-25 21:07:32\');","
		insert into BROWSING_HISTORY values (1237, \'coat\', \'Puma\', \'2015-8-11 10:19:42\');","
		insert into W_ADDRESS values (101, \'Columbus, OH\');","
		insert into W_ADDRESS values (102, \'Los Angles, CA\');","
		insert into W_ADDRESS values (103, \'Chicago, IL\');","
		insert into W_ADDRESS values (104, \'Cleveland, OH\');","
		insert into W_ADDRESS values (105, \'Houston, TX\');","
		insert into PRODUCT_COMMENT values (1234,201);","
		insert into PRODUCT_COMMENT values (1235,202);","
		insert into PRODUCT_COMMENT values (1237,203);","
		insert into BUY_PRODUCT values (1234,201);","
		insert into BUY_PRODUCT values (1235,202);","
		insert into BUY_PRODUCT values (1237,203);","
		insert into SHOP_COMMENT values (1234,0001);","
		insert into SHOP_COMMENT values (1235,0005);","
		insert into SHOP_COMMENT values (1237,0003);","
		insert into SALES_RECORD values (901,24,\'06/24/2015\',256.45,201,004);","
		insert into SALES_RECORD values (902,5,\'06/28/2015\',342.5,203,001);","
		insert into SALES_RECORD values (903,2,\'10/24/2015\',35.5,202,002);","
		insert into SEARCH values (1234,0002);","
		insert into SEARCH values (1235,0005);","
		insert into SEARCH values (1237,0001);","
		insert into BUDGET values (5001,5678,\'10/09/2014\',1234);","
		insert into BUDGET values (5002,67,\'10/09/2015\',1234);","
		insert into BUDGET values (5003,3432,\'10/01/2004\',1234);","
		insert into BUDGET values (5004,87,\'29/2011\',1234);","
		insert into COMPLAINT_DEPARTMENT values (\'LOCAL\',\'localcomplain@osu.edu\',6143284587);","
		insert into COMPLAINT_DEPARTMENT values (\'COUNTY\',\'countycomplain@osu.edu\',614328443);","
		insert into COMPLAINT_DEPARTMENT values (\'STATE\',\'statecomplain@osu.edu\',6143284509);","
		insert into MEDIATE_CONFLICT values (\'LOCAL\',1234,201);","
		insert into MEDIATE_CONFLICT values (\'COUNTY\',1235,202);","
		insert into MEDIATE_CONFLICT values (\'STATE\',1237,203);","
		insert into C_ADDRESS values (1234,\'Columbus,Ohio\');","
		insert into C_ADDRESS values (1235,\'Cincinnati,Ohio\');","
		insert into C_ADDRESS values (1237,\'Los Angeles,Califonia\');","
		insert into PAYMENT_ACCOUNT values (123456789, \'Credit Card\', 001, 1234);","
		insert into PAYMENT_ACCOUNT values (123456790, \'Deposit Card\', 002, 1235);","
		insert into PAYMENT_ACCOUNT values (123456791, \'Credit Card\', 003, 1237)");
	function insertValue($temp,$con)
	{
		mysql_query($temp,$con);
	}
	foreach($dataArray as $sqlTemp)
	{
		insertValue($sqlTemp,$con);
	}
	
?>