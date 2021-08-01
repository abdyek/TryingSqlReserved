<?php

require 'vendor/autoload.php';
require 'propel/config.php';
use PHPUnit\Framework\TestCase;
use TryingSqlReserved\Models\Add;

/**
 * @covers Add::
 */

class AddTest extends TestCase {
	public function testGetByAdd() {
		$add = Add::create();
		$add = Add::getByAdd(123);
		$this->assertNotNull($add);
	}
	public function testGetByAddConstraint() {
		$add = Add::create();
		$addConstraint = Add::getByAddConstraint("hello!");
		$this->assertNotNull($addConstraint);
	}
	public function testGetByAlter() {
		$add = Add::create();
		$alter = Add::getByAlter(true);
		$this->assertNotNull($alter);
	}
	public function testGetByAlterColumn() {
		$add = Add::create();
		$alterColumn = Add::getByAlterColumn(123);
		$this->assertNotNull($alterColumn);
	}
	public function testGetByAlterTable() {
		$add = Add::create();
		$alterTable = Add::getByAlterTable("hello!");
		$this->assertNotNull($alterTable);
	}
	public function testGetByAll() {
		$add = Add::create();
		$all = Add::getByAll(true);
		$this->assertNotNull($all);
	}
	public function testGetByAny() {
		$add = Add::create();
		$any = Add::getByAny(123);
		$this->assertNotNull($any);
	}
	public function testGetByAsc() {
		$add = Add::create();
		$asc = Add::getByAsc("hello!");
		$this->assertNotNull($asc);
	}
	public function testGetByBackupDatabase() {
		$add = Add::create();
		$backupDatabase = Add::getByBackupDatabase(true);
		$this->assertNotNull($backupDatabase);
	}
	public function testGetByBetween() {
		$add = Add::create();
		$between = Add::getByBetween(123);
		$this->assertNotNull($between);
	}
	public function testGetByCheck() {
		$add = Add::create();
		$check = Add::getByCheck("hello!");
		$this->assertNotNull($check);
	}
	public function testGetByColumn() {
		$add = Add::create();
		$column = Add::getByColumn(true);
		$this->assertNotNull($column);
	}
	public function testGetByConstraint() {
		$add = Add::create();
		$constraint = Add::getByConstraint(123);
		$this->assertNotNull($constraint);
	}
	public function testGetByCreate() {
		$add = Add::create();
		$create = Add::getByCreate("hello!");
		$this->assertNotNull($create);
	}
	public function testGetByCreateDatabase() {
		$add = Add::create();
		$createDatabase = Add::getByCreateDatabase(true);
		$this->assertNotNull($createDatabase);
	}
	public function testGetByCreateIndex() {
		$add = Add::create();
		$createIndex = Add::getByCreateIndex(123);
		$this->assertNotNull($createIndex);
	}
	public function testGetByCreateOrReplaceView() {
		$add = Add::create();
		$createOrReplaceView = Add::getByCreateOrReplaceView("hello!");
		$this->assertNotNull($createOrReplaceView);
	}
	public function testGetByCreateTable() {
		$add = Add::create();
		$createTable = Add::getByCreateTable(true);
		$this->assertNotNull($createTable);
	}
	public function testGetByCreateProcedure() {
		$add = Add::create();
		$createProcedure = Add::getByCreateProcedure(123);
		$this->assertNotNull($createProcedure);
	}
	public function testGetByCreateUniqueIndex() {
		$add = Add::create();
		$createUniqueIndex = Add::getByCreateUniqueIndex("hello!");
		$this->assertNotNull($createUniqueIndex);
	}
	public function testGetByCreateView() {
		$add = Add::create();
		$createView = Add::getByCreateView(true);
		$this->assertNotNull($createView);
	}
	public function testGetByDatabase() {
		$add = Add::create();
		$database = Add::getByDatabase(123);
		$this->assertNotNull($database);
	}
	public function testGetByDelete() {
		$add = Add::create();
		$delete = Add::getByDelete("hello!");
		$this->assertNotNull($delete);
	}
	public function testGetByDecs() {
		$add = Add::create();
		$decs = Add::getByDecs(true);
		$this->assertNotNull($decs);
	}
	public function testGetByDistinct() {
		$add = Add::create();
		$distinct = Add::getByDistinct(123);
		$this->assertNotNull($distinct);
	}
	public function testGetByDrop() {
		$add = Add::create();
		$drop = Add::getByDrop("hello!");
		$this->assertNotNull($drop);
	}
	public function testGetByDropColumn() {
		$add = Add::create();
		$dropColumn = Add::getByDropColumn(true);
		$this->assertNotNull($dropColumn);
	}
	public function testGetByDropConstraint() {
		$add = Add::create();
		$dropConstraint = Add::getByDropConstraint(123);
		$this->assertNotNull($dropConstraint);
	}
	public function testGetByDropDatabase() {
		$add = Add::create();
		$dropDatabase = Add::getByDropDatabase("hello!");
		$this->assertNotNull($dropDatabase);
	}
	public function testGetByDropDefault() {
		$add = Add::create();
		$dropDefault = Add::getByDropDefault(true);
		$this->assertNotNull($dropDefault);
	}
	public function testGetByDropIndex() {
		$add = Add::create();
		$dropIndex = Add::getByDropIndex(123);
		$this->assertNotNull($dropIndex);
	}
	public function testGetByDropTable() {
		$add = Add::create();
		$dropTable = Add::getByDropTable("hello!");
		$this->assertNotNull($dropTable);
	}
	public function testGetByDropView() {
		$add = Add::create();
		$dropView = Add::getByDropView(true);
		$this->assertNotNull($dropView);
	}
	public function testGetByExec() {
		$add = Add::create();
		$exec = Add::getByExec(123);
		$this->assertNotNull($exec);
	}
	public function testGetByExists() {
		$add = Add::create();
		$exists = Add::getByExists("hello!");
		$this->assertNotNull($exists);
	}
	public function testGetByForeignKey() {
		$add = Add::create();
		$foreignKey = Add::getByForeignKey(true);
		$this->assertNotNull($foreignKey);
	}
	public function testGetByFrom() {
		$add = Add::create();
		$from = Add::getByFrom(123);
		$this->assertNotNull($from);
	}
	public function testGetByFullOuterJoin() {
		$add = Add::create();
		$fullOuterJoin = Add::getByFullOuterJoin("hello!");
		$this->assertNotNull($fullOuterJoin);
	}
	public function testGetByGroupBy() {
		$add = Add::create();
		$groupBy = Add::getByGroupBy(true);
		$this->assertNotNull($groupBy);
	}
	public function testGetByHaving() {
		$add = Add::create();
		$having = Add::getByHaving(123);
		$this->assertNotNull($having);
	}
	public function testGetByIn() {
		$add = Add::create();
		$in = Add::getByIn("hello!");
		$this->assertNotNull($in);
	}
	public function testGetByIndex() {
		$add = Add::create();
		$index = Add::getByIndex(true);
		$this->assertNotNull($index);
	}
	public function testGetByInnerJoin() {
		$add = Add::create();
		$innerJoin = Add::getByInnerJoin(123);
		$this->assertNotNull($innerJoin);
	}
	public function testGetByInsertInto() {
		$add = Add::create();
		$insertInto = Add::getByInsertInto("hello!");
		$this->assertNotNull($insertInto);
	}
	public function testGetByInsertIntoSelect() {
		$add = Add::create();
		$insertIntoSelect = Add::getByInsertIntoSelect(true);
		$this->assertNotNull($insertIntoSelect);
	}
	public function testGetByIsNull() {
		$add = Add::create();
		$isNull = Add::getByIsNull(123);
		$this->assertNotNull($isNull);
	}
	public function testGetByIsNotNull() {
		$add = Add::create();
		$isNotNull = Add::getByIsNotNull("hello!");
		$this->assertNotNull($isNotNull);
	}
	public function testGetByJoin() {
		$add = Add::create();
		$join = Add::getByJoin(true);
		$this->assertNotNull($join);
	}
	public function testGetByLeftJoin() {
		$add = Add::create();
		$leftJoin = Add::getByLeftJoin(123);
		$this->assertNotNull($leftJoin);
	}
	public function testGetByLike() {
		$add = Add::create();
		$like = Add::getByLike("hello!");
		$this->assertNotNull($like);
	}
	public function testGetByLimit() {
		$add = Add::create();
		$limit = Add::getByLimit(true);
		$this->assertNotNull($limit);
	}
	public function testGetByNot() {
		$add = Add::create();
		$not = Add::getByNot(123);
		$this->assertNotNull($not);
	}
	public function testGetByNotNull() {
		$add = Add::create();
		$notNull = Add::getByNotNull("hello!");
		$this->assertNotNull($notNull);
	}
	public function testGetByOrderBy() {
		$add = Add::create();
		$orderBy = Add::getByOrderBy(true);
		$this->assertNotNull($orderBy);
	}
	public function testGetByOuterJoin() {
		$add = Add::create();
		$outerJoin = Add::getByOuterJoin(123);
		$this->assertNotNull($outerJoin);
	}
	public function testGetByProcedure() {
		$add = Add::create();
		$procedure = Add::getByProcedure("hello!");
		$this->assertNotNull($procedure);
	}
	public function testGetByRightJoin() {
		$add = Add::create();
		$rightJoin = Add::getByRightJoin(true);
		$this->assertNotNull($rightJoin);
	}
	public function testGetByRownum() {
		$add = Add::create();
		$rownum = Add::getByRownum(123);
		$this->assertNotNull($rownum);
	}
	public function testGetBySelect() {
		$add = Add::create();
		$select = Add::getBySelect("hello!");
		$this->assertNotNull($select);
	}
	public function testGetBySelectDistinct() {
		$add = Add::create();
		$selectDistinct = Add::getBySelectDistinct(true);
		$this->assertNotNull($selectDistinct);
	}
	public function testGetBySelectInto() {
		$add = Add::create();
		$selectInto = Add::getBySelectInto(123);
		$this->assertNotNull($selectInto);
	}
	public function testGetBySelectTop() {
		$add = Add::create();
		$selectTop = Add::getBySelectTop("hello!");
		$this->assertNotNull($selectTop);
	}
	public function testGetBySet() {
		$add = Add::create();
		$set = Add::getBySet(true);
		$this->assertNotNull($set);
	}
	public function testGetByTable() {
		$add = Add::create();
		$table = Add::getByTable(123);
		$this->assertNotNull($table);
	}
	public function testGetByTop() {
		$add = Add::create();
		$top = Add::getByTop("hello!");
		$this->assertNotNull($top);
	}
	public function testGetByTruncateTable() {
		$add = Add::create();
		$truncateTable = Add::getByTruncateTable(true);
		$this->assertNotNull($truncateTable);
	}
	public function testGetByUnion() {
		$add = Add::create();
		$union = Add::getByUnion(123);
		$this->assertNotNull($union);
	}
	public function testGetByUnionAll() {
		$add = Add::create();
		$unionAll = Add::getByUnionAll("hello!");
		$this->assertNotNull($unionAll);
	}
	public function testGetByUnique() {
		$add = Add::create();
		$unique = Add::getByUnique(true);
		$this->assertNotNull($unique);
	}
	public function testGetByUpdate() {
		$add = Add::create();
		$update = Add::getByUpdate(123);
		$this->assertNotNull($update);
	}
	public function testGetByValues() {
		$add = Add::create();
		$values = Add::getByValues("hello!");
		$this->assertNotNull($values);
	}
	public function testGetByView() {
		$add = Add::create();
		$view = Add::getByView(true);
		$this->assertNotNull($view);
	}
	public function testGetByWhere() {
		$add = Add::create();
		$where = Add::getByWhere(123);
		$this->assertNotNull($where);
	}
}