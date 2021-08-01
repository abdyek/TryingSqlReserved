<?php
namespace TryingSqlReserved\Models;
class Add{
	public static function create() {
		$model = new \Add();
		$model->save();
		return $model;
	}
	public static function getByAdd($value) {
		return \AddQuery::create()->filterByAdd($value)->findOne();
	}
	public static function getByAddConstraint($value) {
		return \AddQuery::create()->filterByAddConstraint($value)->findOne();
	}
	public static function getByAlter($value) {
		return \AddQuery::create()->filterByAlter($value)->findOne();
	}
	public static function getByAlterColumn($value) {
		return \AddQuery::create()->filterByAlterColumn($value)->findOne();
	}
	public static function getByAlterTable($value) {
		return \AddQuery::create()->filterByAlterTable($value)->findOne();
	}
	public static function getByAll($value) {
		return \AddQuery::create()->filterByAll($value)->findOne();
	}
	public static function getByAny($value) {
		return \AddQuery::create()->filterByAny($value)->findOne();
	}
	public static function getByAsc($value) {
		return \AddQuery::create()->filterByAsc($value)->findOne();
	}
	public static function getByBackupDatabase($value) {
		return \AddQuery::create()->filterByBackupDatabase($value)->findOne();
	}
	public static function getByBetween($value) {
		return \AddQuery::create()->filterByBetween($value)->findOne();
	}
	public static function getByCheck($value) {
		return \AddQuery::create()->filterByCheck($value)->findOne();
	}
	public static function getByColumn($value) {
		return \AddQuery::create()->filterByColumn($value)->findOne();
	}
	public static function getByConstraint($value) {
		return \AddQuery::create()->filterByConstraint($value)->findOne();
	}
	public static function getByCreate($value) {
		return \AddQuery::create()->filterByCreate($value)->findOne();
	}
	public static function getByCreateDatabase($value) {
		return \AddQuery::create()->filterByCreateDatabase($value)->findOne();
	}
	public static function getByCreateIndex($value) {
		return \AddQuery::create()->filterByCreateIndex($value)->findOne();
	}
	public static function getByCreateOrReplaceView($value) {
		return \AddQuery::create()->filterByCreateOrReplaceView($value)->findOne();
	}
	public static function getByCreateTable($value) {
		return \AddQuery::create()->filterByCreateTable($value)->findOne();
	}
	public static function getByCreateProcedure($value) {
		return \AddQuery::create()->filterByCreateProcedure($value)->findOne();
	}
	public static function getByCreateUniqueIndex($value) {
		return \AddQuery::create()->filterByCreateUniqueIndex($value)->findOne();
	}
	public static function getByCreateView($value) {
		return \AddQuery::create()->filterByCreateView($value)->findOne();
	}
	public static function getByDatabase($value) {
		return \AddQuery::create()->filterByDatabase($value)->findOne();
	}
	public static function getByDelete($value) {
		return \AddQuery::create()->filterByDelete($value)->findOne();
	}
	public static function getByDecs($value) {
		return \AddQuery::create()->filterByDecs($value)->findOne();
	}
	public static function getByDistinct($value) {
		return \AddQuery::create()->filterByDistinct($value)->findOne();
	}
	public static function getByDrop($value) {
		return \AddQuery::create()->filterByDrop($value)->findOne();
	}
	public static function getByDropColumn($value) {
		return \AddQuery::create()->filterByDropColumn($value)->findOne();
	}
	public static function getByDropConstraint($value) {
		return \AddQuery::create()->filterByDropConstraint($value)->findOne();
	}
	public static function getByDropDatabase($value) {
		return \AddQuery::create()->filterByDropDatabase($value)->findOne();
	}
	public static function getByDropDefault($value) {
		return \AddQuery::create()->filterByDropDefault($value)->findOne();
	}
	public static function getByDropIndex($value) {
		return \AddQuery::create()->filterByDropIndex($value)->findOne();
	}
	public static function getByDropTable($value) {
		return \AddQuery::create()->filterByDropTable($value)->findOne();
	}
	public static function getByDropView($value) {
		return \AddQuery::create()->filterByDropView($value)->findOne();
	}
	public static function getByExec($value) {
		return \AddQuery::create()->filterByExec($value)->findOne();
	}
	public static function getByExists($value) {
		return \AddQuery::create()->filterByExists($value)->findOne();
	}
	public static function getByForeignKey($value) {
		return \AddQuery::create()->filterByForeignKey($value)->findOne();
	}
	public static function getByFrom($value) {
		return \AddQuery::create()->filterByFrom($value)->findOne();
	}
	public static function getByFullOuterJoin($value) {
		return \AddQuery::create()->filterByFullOuterJoin($value)->findOne();
	}
	public static function getByGroupBy($value) {
		return \AddQuery::create()->filterByGroupBy($value)->findOne();
	}
	public static function getByHaving($value) {
		return \AddQuery::create()->filterByHaving($value)->findOne();
	}
	public static function getByIn($value) {
		return \AddQuery::create()->filterByIn($value)->findOne();
	}
	public static function getByIndex($value) {
		return \AddQuery::create()->filterByIndex($value)->findOne();
	}
	public static function getByInnerJoin($value) {
		return \AddQuery::create()->filterByInnerJoin($value)->findOne();
	}
	public static function getByInsertInto($value) {
		return \AddQuery::create()->filterByInsertInto($value)->findOne();
	}
	public static function getByInsertIntoSelect($value) {
		return \AddQuery::create()->filterByInsertIntoSelect($value)->findOne();
	}
	public static function getByIsNull($value) {
		return \AddQuery::create()->filterByIsNull($value)->findOne();
	}
	public static function getByIsNotNull($value) {
		return \AddQuery::create()->filterByIsNotNull($value)->findOne();
	}
	public static function getByJoin($value) {
		return \AddQuery::create()->filterByJoin($value)->findOne();
	}
	public static function getByLeftJoin($value) {
		return \AddQuery::create()->filterByLeftJoin($value)->findOne();
	}
	public static function getByLike($value) {
		return \AddQuery::create()->filterByLike($value)->findOne();
	}
	public static function getByLimit($value) {
		return \AddQuery::create()->filterByLimit($value)->findOne();
	}
	public static function getByNot($value) {
		return \AddQuery::create()->filterByNot($value)->findOne();
	}
	public static function getByNotNull($value) {
		return \AddQuery::create()->filterByNotNull($value)->findOne();
	}
	public static function getByOrderBy($value) {
		return \AddQuery::create()->filterByOrderBy($value)->findOne();
	}
	public static function getByOuterJoin($value) {
		return \AddQuery::create()->filterByOuterJoin($value)->findOne();
	}
	public static function getByProcedure($value) {
		return \AddQuery::create()->filterByProcedure($value)->findOne();
	}
	public static function getByRightJoin($value) {
		return \AddQuery::create()->filterByRightJoin($value)->findOne();
	}
	public static function getByRownum($value) {
		return \AddQuery::create()->filterByRownum($value)->findOne();
	}
	public static function getBySelect($value) {
		return \AddQuery::create()->filterBySelect($value)->findOne();
	}
	public static function getBySelectDistinct($value) {
		return \AddQuery::create()->filterBySelectDistinct($value)->findOne();
	}
	public static function getBySelectInto($value) {
		return \AddQuery::create()->filterBySelectInto($value)->findOne();
	}
	public static function getBySelectTop($value) {
		return \AddQuery::create()->filterBySelectTop($value)->findOne();
	}
	public static function getBySet($value) {
		return \AddQuery::create()->filterBySet($value)->findOne();
	}
	public static function getByTable($value) {
		return \AddQuery::create()->filterByTable($value)->findOne();
	}
	public static function getByTop($value) {
		return \AddQuery::create()->filterByTop($value)->findOne();
	}
	public static function getByTruncateTable($value) {
		return \AddQuery::create()->filterByTruncateTable($value)->findOne();
	}
	public static function getByUnion($value) {
		return \AddQuery::create()->filterByUnion($value)->findOne();
	}
	public static function getByUnionAll($value) {
		return \AddQuery::create()->filterByUnionAll($value)->findOne();
	}
	public static function getByUnique($value) {
		return \AddQuery::create()->filterByUnique($value)->findOne();
	}
	public static function getByUpdate($value) {
		return \AddQuery::create()->filterByUpdate($value)->findOne();
	}
	public static function getByValues($value) {
		return \AddQuery::create()->filterByValues($value)->findOne();
	}
	public static function getByView($value) {
		return \AddQuery::create()->filterByView($value)->findOne();
	}
	public static function getByWhere($value) {
		return \AddQuery::create()->filterByWhere($value)->findOne();
	}
}
