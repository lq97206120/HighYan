<?php
/*
 * 订单关联模型
 */
Class OrderRelationModel extends RelationModel{
	
		//定义主表名称
	Protected $tableName='order';
	//定义关联关系
	Protected $_link=array(
						
			'express'=>array(
			'mapping_type'=>MANY_TO_MANY,//一对多关系
			'mapping_name'=>'express',
			'foreign_key'=>'order_num',//主表在中间表的字段名称
			'relation_foreign_key'=>'express_id',//副表在中间表的字段 名称
			'relation_table'=>'hy_express_order',//中间表
			
			),
			
			'repair'=>array(
			'mapping_type'=>MANY_TO_MANY,//一对多关系
			'mapping_name'=>'repair',
			'foreign_key'=>'order_num',//主表在中间表的字段名称
			'relation_foreign_key'=>'repair_id',//副表在中间表的字段 名称
			'relation_table'=>'hy_repair_order',//中间表
			
			),
			
	);
	
}