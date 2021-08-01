<?php
namespace TryingSqlReserved\Models;
class Add{
	public static function create() {
		$model = new \Add();
		$model->save();
		return $model;
	}
	public static function getByAdd($value) {
		return \AddQuery::create()->filterByadd($value)->findOne();
	}
	public static function getByAddConstraint($value) {
		return \AddQuery::create()->filterByadd_constraint($value)->findOne();
	}
	public static function getByAlter($value) {
		return \AddQuery::create()->filterByalter($value)->findOne();
	}
	public static function getByAlterColumn($value) {
		return \AddQuery::create()->filterByalter_column($value)->findOne();
	}
	public static function getByAlterTable($value) {
		return \AddQuery::create()->filterByalter_table($value)->findOne();
	}
	public static function getByAll($value) {
		return \AddQuery::create()->filterByall($value)->findOne();
	}
	public static function getByAny($value) {
		return \AddQuery::create()->filterByany($value)->findOne();
	}
	public static function getByAsc($value) {
		return \AddQuery::create()->filterByasc($value)->findOne();
	}
	public static function getByBackupDatabase($value) {
		return \AddQuery::create()->filterBybackup_database($value)->findOne();
	}
	public static function getByBetween($value) {
		return \AddQuery::create()->filterBybetween($value)->findOne();
	}
	public static function getByCheck($value) {
		return \AddQuery::create()->filterBycheck($value)->findOne();
	}
	public static function getByColumn($value) {
		return \AddQuery::create()->filterBycolumn($value)->findOne();
	}
	public static function getByConstraint($value) {
		return \AddQuery::create()->filterByconstraint($value)->findOne();
	}
	public static function getByCreate($value) {
		return \AddQuery::create()->filterBycreate($value)->findOne();
	}
	public static function getByCreateDatabase($value) {
		return \AddQuery::create()->filterBycreate_database($value)->findOne();
	}
	public static function getByCreateIndex($value) {
		return \AddQuery::create()->filterBycreate_index($value)->findOne();
	}
	public static function getByCreateOrReplaceView($value) {
		return \AddQuery::create()->filterBycreate_or_replace_view($value)->findOne();
	}
	public static function getByCreateTable($value) {
		return \AddQuery::create()->filterBycreate_table($value)->findOne();
	}
	public static function getByCreateProcedure($value) {
		return \AddQuery::create()->filterBycreate_procedure($value)->findOne();
	}
	public static function getByCreateUniqueIndex($value) {
		return \AddQuery::create()->filterBycreate_unique_index($value)->findOne();
	}
	public static function getByCreateView($value) {
		return \AddQuery::create()->filterBycreate_view($value)->findOne();
	}
	public static function getByDatabase($value) {
		return \AddQuery::create()->filterBydatabase($value)->findOne();
	}
	public static function getByDelete($value) {
		return \AddQuery::create()->filterBydelete($value)->findOne();
	}
	public static function getByDecs($value) {
		return \AddQuery::create()->filterBydecs($value)->findOne();
	}
	public static function getByDistinct($value) {
		return \AddQuery::create()->filterBydistinct($value)->findOne();
	}
	public static function getByDrop($value) {
		return \AddQuery::create()->filterBydrop($value)->findOne();
	}
	public static function getByDropColumn($value) {
		return \AddQuery::create()->filterBydrop_column($value)->findOne();
	}
	public static function getByDropConstraint($value) {
		return \AddQuery::create()->filterBydrop_constraint($value)->findOne();
	}
	public static function getByDropDatabase($value) {
		return \AddQuery::create()->filterBydrop_database($value)->findOne();
	}
	public static function getByDropDefault($value) {
		return \AddQuery::create()->filterBydrop_default($value)->findOne();
	}
	public static function getByDropIndex($value) {
		return \AddQuery::create()->filterBydrop_index($value)->findOne();
	}
	public static function getByDropTable($value) {
		return \AddQuery::create()->filterBydrop_table($value)->findOne();
	}
	public static function getByDropView($value) {
		return \AddQuery::create()->filterBydrop_view($value)->findOne();
	}
	public static function getByExec($value) {
		return \AddQuery::create()->filterByexec($value)->findOne();
	}
	public static function getByExists($value) {
		return \AddQuery::create()->filterByexists($value)->findOne();
	}
	public static function getByForeignKey($value) {
		return \AddQuery::create()->filterByforeign_key($value)->findOne();
	}
	public static function getByFrom($value) {
		return \AddQuery::create()->filterByfrom($value)->findOne();
	}
	public static function getByFullOuterJoin($value) {
		return \AddQuery::create()->filterByfull_outer_join($value)->findOne();
	}
	public static function getByGroupBy($value) {
		return \AddQuery::create()->filterBygroup_by($value)->findOne();
	}
	public static function getByHaving($value) {
		return \AddQuery::create()->filterByhaving($value)->findOne();
	}
	public static function getByIn($value) {
		return \AddQuery::create()->filterByin($value)->findOne();
	}
	public static function getByIndex($value) {
		return \AddQuery::create()->filterByindex($value)->findOne();
	}
	public static function getByInnerJoin($value) {
		return \AddQuery::create()->filterByinner_join($value)->findOne();
	}
	public static function getByInsertInto($value) {
		return \AddQuery::create()->filterByinsert_into($value)->findOne();
	}
	public static function getByInsertIntoSelect($value) {
		return \AddQuery::create()->filterByinsert_into_select($value)->findOne();
	}
	public static function getByIsNull($value) {
		return \AddQuery::create()->filterByis_null($value)->findOne();
	}
	public static function getByIsNotNull($value) {
		return \AddQuery::create()->filterByis_not_null($value)->findOne();
	}
	public static function getByJoin($value) {
		return \AddQuery::create()->filterByjoin($value)->findOne();
	}
	public static function getByLeftJoin($value) {
		return \AddQuery::create()->filterByleft_join($value)->findOne();
	}
	public static function getByLike($value) {
		return \AddQuery::create()->filterBylike($value)->findOne();
	}
	public static function getByLimit($value) {
		return \AddQuery::create()->filterBylimit($value)->findOne();
	}
	public static function getByNot($value) {
		return \AddQuery::create()->filterBynot($value)->findOne();
	}
	public static function getByNotNull($value) {
		return \AddQuery::create()->filterBynot_null($value)->findOne();
	}
	public static function getByOrderBy($value) {
		return \AddQuery::create()->filterByorder_by($value)->findOne();
	}
	public static function getByOuterJoin($value) {
		return \AddQuery::create()->filterByouter_join($value)->findOne();
	}
	public static function getByProcedure($value) {
		return \AddQuery::create()->filterByprocedure($value)->findOne();
	}
	public static function getByRightJoin($value) {
		return \AddQuery::create()->filterByright_join($value)->findOne();
	}
	public static function getByRownum($value) {
		return \AddQuery::create()->filterByrownum($value)->findOne();
	}
	public static function getBySelect($value) {
		return \AddQuery::create()->filterByselect($value)->findOne();
	}
	public static function getBySelectDistinct($value) {
		return \AddQuery::create()->filterByselect_distinct($value)->findOne();
	}
	public static function getBySelectInto($value) {
		return \AddQuery::create()->filterByselect_into($value)->findOne();
	}
	public static function getBySelectTop($value) {
		return \AddQuery::create()->filterByselect_top($value)->findOne();
	}
	public static function getBySet($value) {
		return \AddQuery::create()->filterByset($value)->findOne();
	}
	public static function getByTable($value) {
		return \AddQuery::create()->filterBytable($value)->findOne();
	}
	public static function getByTop($value) {
		return \AddQuery::create()->filterBytop($value)->findOne();
	}
	public static function getByTruncateTable($value) {
		return \AddQuery::create()->filterBytruncate_table($value)->findOne();
	}
	public static function getByUnion($value) {
		return \AddQuery::create()->filterByunion($value)->findOne();
	}
	public static function getByUnionAll($value) {
		return \AddQuery::create()->filterByunion_all($value)->findOne();
	}
	public static function getByUnique($value) {
		return \AddQuery::create()->filterByunique($value)->findOne();
	}
	public static function getByUpdate($value) {
		return \AddQuery::create()->filterByupdate($value)->findOne();
	}
	public static function getByValues($value) {
		return \AddQuery::create()->filterByvalues($value)->findOne();
	}
	public static function getByView($value) {
		return \AddQuery::create()->filterByview($value)->findOne();
	}
	public static function getByWhere($value) {
		return \AddQuery::create()->filterBywhere($value)->findOne();
	}
}
