/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Shayla
 * Created: Sep 5, 2016
 */

CREATE TABLE `catalog_item` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=8
;
