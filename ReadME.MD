live data search by product name

ajax jquery search on key up

my task

CREATE TABLE `customer_orders` (
 `order_id` int(11) NOT NULL AUTO_INCREMENT,
 `customer_id` int(11) NOT NULL,
 `due_amount` varchar(255) NOT NULL,
 `order_discount` varchar(255) NOT NULL,
 `total_amount` varchar(255) NOT NULL,
 `invoice_no` varchar(255) NOT NULL,
 `total_products` varchar(255) NOT NULL,
 `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
 `order_status` varchar(255) NOT NULL,
 `approval_status` varchar(255) NOT NULL,
 `payment_method` varchar(255) NOT NULL,
 `customer_address` varchar(255) NOT NULL,
 `customer_phone` varchar(255) NOT NULL,
 `customer_location` varchar(255) NOT NULL,
 `purchase_currency` varchar(255) NOT NULL,
 `customer_comment` text NOT NULL,
 PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1

INSERT INTO `customer_orders`(`order_id`, `customer_id`, `due_amount`, `order_discount`, `total_amount`, `invoice_no`, `total_products`, `order_date`, `order_status`, `approval_status`, `payment_method`, `customer_address`, `customer_phone`, `customer_location`, `purchase_currency`, `customer_comment`) VALUES ('123423','213','23','2','56','5686585','6','2021-11-30 14:12:26','en_route','approved','cash on delivery','abu dhabi','234','downtown','usd','well'),
('2334654','2134','44','4','90','67865754','9','2021-11-30 14:12:26','en_route','approved','card','badagry','814','uptown','eur','what'),('32435','352','67','2','34','4565782','4','2021-11-30 14:12:26','pending','unapproved','card','cotonou','150','surburb','cad','can'),
('4654767','921','53','4','63','925327','5','2021-11-30 14:12:26','en_route','approved','cash on delivery','abuja','1706','urban','ngn','i')

monthly orders
todo: search by order number
result: all order numbers correlating with the order will show up