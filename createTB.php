<?php
	include 'dbconnect.php';
	mysql_select_db("ecommerce",$con);

$tableArray = array('create table CUSTOMER
(
	C_id  int primary key not null,
	User_name varchar(20),
	Tele_num varchar(10),
	C_rating int default 1 check (C_rating in (1,2,3,4,5)),
	C_record int default 1 check (C_record in (1,2,3,4,5)),
	Csm_ability int default 1 check (Csm_ability in (1,2,3,4,5)),
	Email_addr varchar(30),
	Csm_frqcy int,
	User_ssn int check (User_ssn>99999999 and User_ssn<9999999999),
	order_num int
);','create table BROWSING_HISTORY
(
	C_id int, constraint FK_BROWS_id foreign key (C_id) references CUSTOMER(C_id),
	Item_name varchar(20),
	Shop_name varchar(20),
	Browsing_time varchar(40) default \'%Y-%c-%d \',
	Primary key(C_id, Item_name)
);','create table PAYMENT_ACCOUNT
(	
	User_ssn int primary key default 1111111111
	check (User_ssn>99999999 and User_ssn<9999999999),
	Acc_type varchar(20),
	Acc_num int,
	C_id int, constraint FK_PAY_ID foreign key (C_id) references CUSTOMER (C_id)
);','create table C_ADDRESS
(
	C_id  int,  constraint FK_C_C foreign key (C_id) references CUSTOMER (C_id) ,
	C_Address varchar(100), #originally Address, 
	primary key (C_id,C_Address)
);','create table PURCHASE_RECORD
(
	Order_num int primary key,
	Purchase_Time varchar(40) default \'%Y-%c-%d\',
    P_price float,
	Item_name varchar(30),
	# delete P_date
	Quantity int,
	C_id int, constraint FK_PUR_ID foreign key (C_id) references CUSTOMER(C_id)
);','create table BUDGET
(
	B_num int primary key,
	Money_amount float,
	# Is was Time originally, which contradict with key word
	B_Time varchar(40) default \'%Y-%c-%d\',
    C_id int, constraint FK_BUD_ID foreign key (C_id) references CUSTOMER(C_id)
);','create table  COMPLAINT_DEPARTMENT 
(
	C_name varchar(20) primary key,
	E_mail varchar(30),
	Telephone varchar(10)
);','create table SHOP_LEVEL#level
(
	L_num int primary key default 1 check (L_num in (1,2,3,4,5)),
	Reputation varchar(100),
	Credibility varchar(100),
	Service_quality varchar(100) #quantity

);','create table SUPPLIER
(
	S_num int primary key,
	Name varchar(20),
	Sp_address varchar(50),
	S_tele varchar(10),
	Email varchar(30),
	Order_num int, constraint FK_SUP_ORD foreign key (Order_num) references
	PURCHASE_RECORD (Order_num)
);','create table WAREHOUSE
(
	W_num int primary key,
	W_name varchar(20),
	Tele_num varchar(10),
	Email varchar(30),
	S_num int, constraint FK_WARE_S foreign key (S_num) references SUPPLIER(S_num)
);','create table SHOP
(
	Shop_num int primary key,
	Email_addr varchar(30),
	Shop_address varchar(50),#address
	L_num int, constraint FK_SHOP_L foreign key (L_num) references SHOP_LEVEL (L_num),
	W_num int, constraint FK_SHOP_W foreign key (W_num) references WAREHOUSE (W_num),
	URL varchar(60)
);','create table MEDIATE_CONFLICT
(
	C_name varchar(20), constraint FK_MED_NAME foreign key (C_name) references COMPLAINT_DEPARTMENT (C_name),
	C_id int, constraint FK_MED_ID foreign key (C_id) references CUSTOMER (C_id),
	Shop_num int, constraint FK_MED_S foreign key (Shop_num) references SHOP(Shop_num),
	primary key(C_name,C_id,Shop_num)

);','
create table ACTIVITY
(
	Shop_num int, constraint FK_ACTIVITY_S foreign key (Shop_num) references SHOP(Shop_num),
	A_name varchar(30),
	# Time originally
	A_time varchar(40) default \'year-month-day\',
    A_info varchar(200),
	primary key(Shop_num, A_name)
);','
create table PRODUCT
(
	G_num int primary key,
	Name varchar(30),
	Sale_price float,
	Cost float,
	Prdct_description varchar(200),
	Purchase_date varchar(30) default \'year-month-day\',
	S_number int, constraint FK_PROD_S foreign key (S_number) references SUPPLIER(S_num)

);','create table SEARCH
(
	C_id int, constraint FK_SEA_ID foreign key (C_id) references CUSTOMER(C_id), 
	G_num int, constraint FK_SEARCH_G foreign key (G_num) references PRODUCT(G_num),
	primary key(C_id,G_num)
);','create table SALES_RECORD
(
	Order_number int primary key,
	QTty int,
	#Date
	S_Date varchar(40) default \'year-month-day\',
    Price float,
	Shop_num int, constraint FK_SRCORD_S foreign key (Shop_num) references SHOP(Shop_num),
	S_num int, constraint FK_SRCORD_SNUM foreign key (S_num) references SUPPLIER(S_num)
);','create table SHOP_COMMENT
(
	C_id int, constraint FK_SHOP_ID foreign key (C_id) references CUSTOMER(C_id), 
	G_num int, constraint FK_SHOP_G foreign key (G_num) references PRODUCT(G_num),
	primary key (C_id,G_num)
);','create table EMPLOYEE
(
	E_id int primary key,
	Ssn  int not null default 1111111111
	check (Ssn>99999999 and Ssn<9999999999),
	Name varchar(20),
	Emp_address varchar(50),#address
	Email varchar(30),
	E_tele varchar(10),
	Shop_num int, constraint FK_EMP_S foreign key (Shop_num) references SHOP(Shop_num)
);','create table BUY_PRODUCT
(
	C_id int, constraint FK_BUY_ID foreign key (C_id) references CUSTOMER(C_id), 
	Shop_num int, constraint FK_BUY_S foreign key (Shop_num) references SHOP(Shop_num),
	primary key(C_id,Shop_num)
);','create table PRODUCT_COMMENT
(
	C_id int, constraint FK_PRODUCT_ID foreign key (C_id) references CUSTOMER(C_id), 
	Shop_num int, constraint FK_PRODUCT_S foreign key (Shop_num) references SHOP(Shop_num),
	primary key (C_id,Shop_num)

);','create table W_ADDRESS 
(
	W_num int, constraint FK_W_W foreign key (W_num) references WAREHOUSE (W_num),
	Ware_address varchar(50),
	primary key (W_num,Ware_address)
	#address
);','create table EMP_ROLE#role 
(
	E_id int, constraint FK_EMPR_id foreign key (E_id) references EMPLOYEE(E_id),
	Title varchar(20),
	Work_time int,
	Salary int,
	primary key (E_id,Title)
);','create table SALE
(
	G_num int not null, constraint FK_SALE_G foreign key (G_num) references PRODUCT(G_num),
	Shop_num int not null, constraint FK_SALE_S foreign key (Shop_num) references SHOP(Shop_num),
	primary key (G_num,Shop_num)
);','create table PRODUCE
(
	G_num int, constraint FK_PRDC_G foreign key (G_num) references PRODUCT(G_num),
	S_num  int, constraint FK_PRDC_S foreign key (S_num) references SUPPLIER(S_num),
	primary key (G_num,S_num)
);','create table SALES_RETURN
(
	Shop_num  int, constraint FK_SALES_RET_S foreign key (Shop_num) references SHOP(Shop_num),
	S_num int, constraint FK_SALES_RET_SNUM foreign key (S_num) references SUPPLIER(S_num),
	primary key (Shop_num,S_num)
);','create table MAINTAIN_PRODUCT
(
	Shop_num int, constraint FK_MAINTAIN_S foreign key (Shop_num) references SHOP(Shop_num),
	S_num int, constraint FK_MAINTAIN_SNUM foreign key (S_num) references SUPPLIER(S_num),
	primary key (Shop_num,S_num)
);','create table DELIVER_GOODS
(
	Shop_num int, constraint FK_DELIVER_S foreign key (Shop_num) references SHOP(Shop_num),
	S_num int, constraint FK_DELIVER_SNUM foreign key (S_num) references SUPPLIER(S_num),
	primary key (Shop_num,S_num)

);');

function createTable($temp,$con)
{
	mysql_query($temp,$con);
}
foreach($tableArray as $sqlTemp)
{
	createTable($sqlTemp,$con);
}

echo "Tables are Created!";
/* try{
	mysql_query($sql2,$con);
	echo "fucking";
}
catch(Exception $e)
{
	echo "Error happened";
} */
/* if(mysql_query($sql2,$con))
	echo "oh my god";
else "fucking "; */
?>