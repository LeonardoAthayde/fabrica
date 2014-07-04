<?php
	/**
	 * The abstract BalancoPecasGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the BalancoPecas subclass which
	 * extends this BalancoPecasGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the BalancoPecas class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $OrdemProducaoGradeId the value for intOrdemProducaoGradeId (Unique)
	 * @property integer $Balanco the value for intBalanco (Not Null)
	 * @property integer $QuantidadeProduzida the value for intQuantidadeProduzida (Not Null)
	 * @property boolean $Concluido the value for blnConcluido (Not Null)
	 * @property ComandoRisco $OrdemProducaoGrade the value for the ComandoRisco object referenced by intOrdemProducaoGradeId (Unique)
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class BalancoPecasGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column balanco_pecas.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column balanco_pecas.ordem_producao_grade_id
		 * @var integer intOrdemProducaoGradeId
		 */
		protected $intOrdemProducaoGradeId;
		const OrdemProducaoGradeIdDefault = null;


		/**
		 * Protected member variable that maps to the database column balanco_pecas.balanco
		 * @var integer intBalanco
		 */
		protected $intBalanco;
		const BalancoDefault = null;


		/**
		 * Protected member variable that maps to the database column balanco_pecas.quantidade_produzida
		 * @var integer intQuantidadeProduzida
		 */
		protected $intQuantidadeProduzida;
		const QuantidadeProduzidaDefault = null;


		/**
		 * Protected member variable that maps to the database column balanco_pecas.concluido
		 * @var boolean blnConcluido
		 */
		protected $blnConcluido;
		const ConcluidoDefault = null;


		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column balanco_pecas.ordem_producao_grade_id.
		 *
		 * NOTE: Always use the OrdemProducaoGrade property getter to correctly retrieve this ComandoRisco object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var ComandoRisco objOrdemProducaoGrade
		 */
		protected $objOrdemProducaoGrade;





		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a BalancoPecas from PK Info
		 * @param integer $intId
		 * @return BalancoPecas
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return BalancoPecas::QuerySingle(
				QQ::Equal(QQN::BalancoPecas()->Id, $intId)
			);
		}

		/**
		 * Load all BalancoPecases
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return BalancoPecas[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call BalancoPecas::QueryArray to perform the LoadAll query
			try {
				return BalancoPecas::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all BalancoPecases
		 * @return int
		 */
		public static function CountAll() {
			// Call BalancoPecas::QueryCount to perform the CountAll query
			return BalancoPecas::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCODO QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcodo Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = BalancoPecas::GetDatabase();

			// Create/Build out the QueryBuilder object with BalancoPecas-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'balanco_pecas');
			BalancoPecas::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('balanco_pecas');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcodo Query method to query for a single BalancoPecas object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return BalancoPecas the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = BalancoPecas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new BalancoPecas object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = BalancoPecas::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem) $objToReturn[] = $objItem;
				}

				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if (is_null($objDbRow)) return null;
				return BalancoPecas::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of BalancoPecas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return BalancoPecas[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = BalancoPecas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return BalancoPecas::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcodo query method to issue a query and get a cursor to progressively fetch its results.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return QDatabaseResultBase the cursor resource instance
		 */
		public static function QueryCursor(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the query statement
			try {
				$strQuery = BalancoPecas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
		
			// Return the results cursor
			$objDbResult->QueryBuilder = $objQueryBuilder;
			return $objDbResult;
		}

		/**
		 * Static Qcodo Query method to query for a count of BalancoPecas objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = BalancoPecas::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

/*		public static function QueryArrayCached($strConditions, $mixParameterArray = null) {
			// Get the Database Object for this Class
			$objDatabase = BalancoPecas::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'balanco_pecas_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with BalancoPecas-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				BalancoPecas::GetSelectFields($objQueryBuilder);
				BalancoPecas::GetFromFields($objQueryBuilder);

				// Ensure the Passed-in Conditions is a string
				try {
					$strConditions = QType::Cast($strConditions, QType::String);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

				// Create the Conditions object, and apply it
				$objConditions = eval('return ' . $strConditions . ';');

				// Apply Any Conditions
				if ($objConditions)
					$objConditions->UpdateQueryBuilder($objQueryBuilder);

				// Get the SQL Statement
				$strQuery = $objQueryBuilder->GetStatement();

				// Save the SQL Statement in the Cache
				$objCache->SaveData($strQuery);
			}

			// Prepare the Statement with the Parameters
			if ($mixParameterArray)
				$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objDatabase->Query($strQuery);
			return BalancoPecas::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this BalancoPecas
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'balanco_pecas';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'ordem_producao_grade_id', $strAliasPrefix . 'ordem_producao_grade_id');
			$objBuilder->AddSelectItem($strTableName, 'balanco', $strAliasPrefix . 'balanco');
			$objBuilder->AddSelectItem($strTableName, 'quantidade_produzida', $strAliasPrefix . 'quantidade_produzida');
			$objBuilder->AddSelectItem($strTableName, 'concluido', $strAliasPrefix . 'concluido');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a BalancoPecas from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this BalancoPecas::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return BalancoPecas
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the BalancoPecas object
			$objToReturn = new BalancoPecas();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'ordem_producao_grade_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ordem_producao_grade_id'] : $strAliasPrefix . 'ordem_producao_grade_id';
			$objToReturn->intOrdemProducaoGradeId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'balanco', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'balanco'] : $strAliasPrefix . 'balanco';
			$objToReturn->intBalanco = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'quantidade_produzida', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantidade_produzida'] : $strAliasPrefix . 'quantidade_produzida';
			$objToReturn->intQuantidadeProduzida = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'concluido', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'concluido'] : $strAliasPrefix . 'concluido';
			$objToReturn->blnConcluido = $objDbRow->GetColumn($strAliasName, 'Bit');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'balanco_pecas__';

			// Check for OrdemProducaoGrade Early Binding
			$strAlias = $strAliasPrefix . 'ordem_producao_grade_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objOrdemProducaoGrade = ComandoRisco::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordem_producao_grade_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of BalancoPecases from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return BalancoPecas[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();
			
			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objLastRowItem = null;
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = BalancoPecas::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = BalancoPecas::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single BalancoPecas object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return BalancoPecas next row resulting from the query
		 */
		public static function InstantiateCursor(QDatabaseResultBase $objDbResult) {
			// If blank resultset, then return empty result
			if (!$objDbResult) return null;

			// If empty resultset, then return empty result
			$objDbRow = $objDbResult->GetNextRow();
			if (!$objDbRow) return null;

			// We need the Column Aliases
			$strColumnAliasArray = $objDbResult->QueryBuilder->ColumnAliasArray;
			if (!$strColumnAliasArray) $strColumnAliasArray = array();

			// Pull Expansions (if applicable)
			$strExpandAsArrayNodes = $objDbResult->QueryBuilder->ExpandAsArrayNodes;

			// Load up the return result with a row and return it
			return BalancoPecas::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single BalancoPecas object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return BalancoPecas
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return BalancoPecas::QuerySingle(
				QQ::Equal(QQN::BalancoPecas()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load a single BalancoPecas object,
		 * by OrdemProducaoGradeId Index(es)
		 * @param integer $intOrdemProducaoGradeId
		 * @return BalancoPecas
		*/
		public static function LoadByOrdemProducaoGradeId($intOrdemProducaoGradeId, $objOptionalClauses = null) {
			return BalancoPecas::QuerySingle(
				QQ::Equal(QQN::BalancoPecas()->OrdemProducaoGradeId, $intOrdemProducaoGradeId)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this BalancoPecas
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = BalancoPecas::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `balanco_pecas` (
							`ordem_producao_grade_id`,
							`balanco`,
							`quantidade_produzida`,
							`concluido`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intOrdemProducaoGradeId) . ',
							' . $objDatabase->SqlVariable($this->intBalanco) . ',
							' . $objDatabase->SqlVariable($this->intQuantidadeProduzida) . ',
							' . $objDatabase->SqlVariable($this->blnConcluido) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('balanco_pecas', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`balanco_pecas`
						SET
							`ordem_producao_grade_id` = ' . $objDatabase->SqlVariable($this->intOrdemProducaoGradeId) . ',
							`balanco` = ' . $objDatabase->SqlVariable($this->intBalanco) . ',
							`quantidade_produzida` = ' . $objDatabase->SqlVariable($this->intQuantidadeProduzida) . ',
							`concluido` = ' . $objDatabase->SqlVariable($this->blnConcluido) . '
						WHERE
							`id` = ' . $objDatabase->SqlVariable($this->intId) . '
					');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('UPDATE');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this BalancoPecas
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this BalancoPecas with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = BalancoPecas::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_pecas`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all BalancoPecases
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = BalancoPecas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_pecas`');
		}

		/**
		 * Truncate balanco_pecas table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = BalancoPecas::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `balanco_pecas`');
		}

		/**
		 * Reload this BalancoPecas from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved BalancoPecas object.');

			// Reload the Object
			$objReloaded = BalancoPecas::Load($this->intId);

			// Update $this's local variables to match
			$this->OrdemProducaoGradeId = $objReloaded->OrdemProducaoGradeId;
			$this->intBalanco = $objReloaded->intBalanco;
			$this->intQuantidadeProduzida = $objReloaded->intQuantidadeProduzida;
			$this->blnConcluido = $objReloaded->blnConcluido;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = BalancoPecas::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `balanco_pecas` (
					`id`,
					`ordem_producao_grade_id`,
					`balanco`,
					`quantidade_produzida`,
					`concluido`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intOrdemProducaoGradeId) . ',
					' . $objDatabase->SqlVariable($this->intBalanco) . ',
					' . $objDatabase->SqlVariable($this->intQuantidadeProduzida) . ',
					' . $objDatabase->SqlVariable($this->blnConcluido) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @param integer intId
		 * @return BalancoPecas[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = BalancoPecas::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM balanco_pecas WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return BalancoPecas::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return BalancoPecas[]
		 */
		public function GetJournal() {
			return BalancoPecas::GetJournalForId($this->intId);
		}




		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Id':
					// Gets the value for intId (Read-Only PK)
					// @return integer
					return $this->intId;

				case 'OrdemProducaoGradeId':
					// Gets the value for intOrdemProducaoGradeId (Unique)
					// @return integer
					return $this->intOrdemProducaoGradeId;

				case 'Balanco':
					// Gets the value for intBalanco (Not Null)
					// @return integer
					return $this->intBalanco;

				case 'QuantidadeProduzida':
					// Gets the value for intQuantidadeProduzida (Not Null)
					// @return integer
					return $this->intQuantidadeProduzida;

				case 'Concluido':
					// Gets the value for blnConcluido (Not Null)
					// @return boolean
					return $this->blnConcluido;


				///////////////////
				// Member Objects
				///////////////////
				case 'OrdemProducaoGrade':
					// Gets the value for the ComandoRisco object referenced by intOrdemProducaoGradeId (Unique)
					// @return ComandoRisco
					try {
						if ((!$this->objOrdemProducaoGrade) && (!is_null($this->intOrdemProducaoGradeId)))
							$this->objOrdemProducaoGrade = ComandoRisco::Load($this->intOrdemProducaoGradeId);
						return $this->objOrdemProducaoGrade;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


				case '__Restored':
					return $this->__blnRestored;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

				/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'OrdemProducaoGradeId':
					// Sets the value for intOrdemProducaoGradeId (Unique)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objOrdemProducaoGrade = null;
						return ($this->intOrdemProducaoGradeId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Balanco':
					// Sets the value for intBalanco (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intBalanco = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'QuantidadeProduzida':
					// Sets the value for intQuantidadeProduzida (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intQuantidadeProduzida = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Concluido':
					// Sets the value for blnConcluido (Not Null)
					// @param boolean $mixValue
					// @return boolean
					try {
						return ($this->blnConcluido = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'OrdemProducaoGrade':
					// Sets the value for the ComandoRisco object referenced by intOrdemProducaoGradeId (Unique)
					// @param ComandoRisco $mixValue
					// @return ComandoRisco
					if (is_null($mixValue)) {
						$this->intOrdemProducaoGradeId = null;
						$this->objOrdemProducaoGrade = null;
						return null;
					} else {
						// Make sure $mixValue actually is a ComandoRisco object
						try {
							$mixValue = QType::Cast($mixValue, 'ComandoRisco');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED ComandoRisco object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved OrdemProducaoGrade for this BalancoPecas');

						// Update Local Member Variables
						$this->objOrdemProducaoGrade = $mixValue;
						$this->intOrdemProducaoGradeId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="BalancoPecas"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="OrdemProducaoGrade" type="xsd1:ComandoRisco"/>';
			$strToReturn .= '<element name="Balanco" type="xsd:int"/>';
			$strToReturn .= '<element name="QuantidadeProduzida" type="xsd:int"/>';
			$strToReturn .= '<element name="Concluido" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('BalancoPecas', $strComplexTypeArray)) {
				$strComplexTypeArray['BalancoPecas'] = BalancoPecas::GetSoapComplexTypeXml();
				ComandoRisco::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, BalancoPecas::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new BalancoPecas();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'OrdemProducaoGrade')) &&
				($objSoapObject->OrdemProducaoGrade))
				$objToReturn->OrdemProducaoGrade = ComandoRisco::GetObjectFromSoapObject($objSoapObject->OrdemProducaoGrade);
			if (property_exists($objSoapObject, 'Balanco'))
				$objToReturn->intBalanco = $objSoapObject->Balanco;
			if (property_exists($objSoapObject, 'QuantidadeProduzida'))
				$objToReturn->intQuantidadeProduzida = $objSoapObject->QuantidadeProduzida;
			if (property_exists($objSoapObject, 'Concluido'))
				$objToReturn->blnConcluido = $objSoapObject->Concluido;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, BalancoPecas::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objOrdemProducaoGrade)
				$objObject->objOrdemProducaoGrade = ComandoRisco::GetSoapObjectFromObject($objObject->objOrdemProducaoGrade, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intOrdemProducaoGradeId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $OrdemProducaoGradeId
	 * @property-read QQNodeComandoRisco $OrdemProducaoGrade
	 * @property-read QQNode $Balanco
	 * @property-read QQNode $QuantidadeProduzida
	 * @property-read QQNode $Concluido
	 */
	class QQNodeBalancoPecas extends QQNode {
		protected $strTableName = 'balanco_pecas';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'BalancoPecas';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'OrdemProducaoGradeId':
					return new QQNode('ordem_producao_grade_id', 'OrdemProducaoGradeId', 'integer', $this);
				case 'OrdemProducaoGrade':
					return new QQNodeComandoRisco('ordem_producao_grade_id', 'OrdemProducaoGrade', 'integer', $this);
				case 'Balanco':
					return new QQNode('balanco', 'Balanco', 'integer', $this);
				case 'QuantidadeProduzida':
					return new QQNode('quantidade_produzida', 'QuantidadeProduzida', 'integer', $this);
				case 'Concluido':
					return new QQNode('concluido', 'Concluido', 'boolean', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}
	
	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $OrdemProducaoGradeId
	 * @property-read QQNodeComandoRisco $OrdemProducaoGrade
	 * @property-read QQNode $Balanco
	 * @property-read QQNode $QuantidadeProduzida
	 * @property-read QQNode $Concluido
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeBalancoPecas extends QQReverseReferenceNode {
		protected $strTableName = 'balanco_pecas';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'BalancoPecas';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'OrdemProducaoGradeId':
					return new QQNode('ordem_producao_grade_id', 'OrdemProducaoGradeId', 'integer', $this);
				case 'OrdemProducaoGrade':
					return new QQNodeComandoRisco('ordem_producao_grade_id', 'OrdemProducaoGrade', 'integer', $this);
				case 'Balanco':
					return new QQNode('balanco', 'Balanco', 'integer', $this);
				case 'QuantidadeProduzida':
					return new QQNode('quantidade_produzida', 'QuantidadeProduzida', 'integer', $this);
				case 'Concluido':
					return new QQNode('concluido', 'Concluido', 'boolean', $this);

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>