<?php
	/**
	 * The abstract CostureiraTempoRealGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the CostureiraTempoReal subclass which
	 * extends this CostureiraTempoRealGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the CostureiraTempoReal class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $Quantidade the value for intQuantidade (Not Null)
	 * @property integer $OrdemProducaoGradeId the value for intOrdemProducaoGradeId (Not Null)
	 * @property integer $CostureiraId the value for intCostureiraId (Unique)
	 * @property OrdemProducaoGrade $OrdemProducaoGrade the value for the OrdemProducaoGrade object referenced by intOrdemProducaoGradeId (Not Null)
	 * @property Costureira $Costureira the value for the Costureira object referenced by intCostureiraId (Unique)
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CostureiraTempoRealGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column costureira_tempo_real.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column costureira_tempo_real.quantidade
		 * @var integer intQuantidade
		 */
		protected $intQuantidade;
		const QuantidadeDefault = null;


		/**
		 * Protected member variable that maps to the database column costureira_tempo_real.ordem_producao_grade_id
		 * @var integer intOrdemProducaoGradeId
		 */
		protected $intOrdemProducaoGradeId;
		const OrdemProducaoGradeIdDefault = null;


		/**
		 * Protected member variable that maps to the database column costureira_tempo_real.costureira_id
		 * @var integer intCostureiraId
		 */
		protected $intCostureiraId;
		const CostureiraIdDefault = null;


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
		 * in the database column costureira_tempo_real.ordem_producao_grade_id.
		 *
		 * NOTE: Always use the OrdemProducaoGrade property getter to correctly retrieve this OrdemProducaoGrade object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var OrdemProducaoGrade objOrdemProducaoGrade
		 */
		protected $objOrdemProducaoGrade;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column costureira_tempo_real.costureira_id.
		 *
		 * NOTE: Always use the Costureira property getter to correctly retrieve this Costureira object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Costureira objCostureira
		 */
		protected $objCostureira;





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
		 * Load a CostureiraTempoReal from PK Info
		 * @param integer $intId
		 * @return CostureiraTempoReal
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return CostureiraTempoReal::QuerySingle(
				QQ::Equal(QQN::CostureiraTempoReal()->Id, $intId)
			);
		}

		/**
		 * Load all CostureiraTempoReals
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CostureiraTempoReal[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call CostureiraTempoReal::QueryArray to perform the LoadAll query
			try {
				return CostureiraTempoReal::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all CostureiraTempoReals
		 * @return int
		 */
		public static function CountAll() {
			// Call CostureiraTempoReal::QueryCount to perform the CountAll query
			return CostureiraTempoReal::QueryCount(QQ::All());
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
			$objDatabase = CostureiraTempoReal::GetDatabase();

			// Create/Build out the QueryBuilder object with CostureiraTempoReal-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'costureira_tempo_real');
			CostureiraTempoReal::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('costureira_tempo_real');

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
		 * Static Qcodo Query method to query for a single CostureiraTempoReal object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CostureiraTempoReal the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CostureiraTempoReal::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new CostureiraTempoReal object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = CostureiraTempoReal::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return CostureiraTempoReal::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of CostureiraTempoReal objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CostureiraTempoReal[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CostureiraTempoReal::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return CostureiraTempoReal::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = CostureiraTempoReal::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of CostureiraTempoReal objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CostureiraTempoReal::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = CostureiraTempoReal::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'costureira_tempo_real_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with CostureiraTempoReal-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				CostureiraTempoReal::GetSelectFields($objQueryBuilder);
				CostureiraTempoReal::GetFromFields($objQueryBuilder);

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
			return CostureiraTempoReal::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this CostureiraTempoReal
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'costureira_tempo_real';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'quantidade', $strAliasPrefix . 'quantidade');
			$objBuilder->AddSelectItem($strTableName, 'ordem_producao_grade_id', $strAliasPrefix . 'ordem_producao_grade_id');
			$objBuilder->AddSelectItem($strTableName, 'costureira_id', $strAliasPrefix . 'costureira_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a CostureiraTempoReal from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this CostureiraTempoReal::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return CostureiraTempoReal
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the CostureiraTempoReal object
			$objToReturn = new CostureiraTempoReal();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'quantidade', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantidade'] : $strAliasPrefix . 'quantidade';
			$objToReturn->intQuantidade = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'ordem_producao_grade_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ordem_producao_grade_id'] : $strAliasPrefix . 'ordem_producao_grade_id';
			$objToReturn->intOrdemProducaoGradeId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'costureira_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'costureira_id'] : $strAliasPrefix . 'costureira_id';
			$objToReturn->intCostureiraId = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'costureira_tempo_real__';

			// Check for OrdemProducaoGrade Early Binding
			$strAlias = $strAliasPrefix . 'ordem_producao_grade_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objOrdemProducaoGrade = OrdemProducaoGrade::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordem_producao_grade_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Costureira Early Binding
			$strAlias = $strAliasPrefix . 'costureira_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCostureira = Costureira::InstantiateDbRow($objDbRow, $strAliasPrefix . 'costureira_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of CostureiraTempoReals from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return CostureiraTempoReal[]
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
					$objItem = CostureiraTempoReal::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = CostureiraTempoReal::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single CostureiraTempoReal object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return CostureiraTempoReal next row resulting from the query
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
			return CostureiraTempoReal::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single CostureiraTempoReal object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return CostureiraTempoReal
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return CostureiraTempoReal::QuerySingle(
				QQ::Equal(QQN::CostureiraTempoReal()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load a single CostureiraTempoReal object,
		 * by CostureiraId Index(es)
		 * @param integer $intCostureiraId
		 * @return CostureiraTempoReal
		*/
		public static function LoadByCostureiraId($intCostureiraId, $objOptionalClauses = null) {
			return CostureiraTempoReal::QuerySingle(
				QQ::Equal(QQN::CostureiraTempoReal()->CostureiraId, $intCostureiraId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of CostureiraTempoReal objects,
		 * by OrdemProducaoGradeId Index(es)
		 * @param integer $intOrdemProducaoGradeId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CostureiraTempoReal[]
		*/
		public static function LoadArrayByOrdemProducaoGradeId($intOrdemProducaoGradeId, $objOptionalClauses = null) {
			// Call CostureiraTempoReal::QueryArray to perform the LoadArrayByOrdemProducaoGradeId query
			try {
				return CostureiraTempoReal::QueryArray(
					QQ::Equal(QQN::CostureiraTempoReal()->OrdemProducaoGradeId, $intOrdemProducaoGradeId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CostureiraTempoReals
		 * by OrdemProducaoGradeId Index(es)
		 * @param integer $intOrdemProducaoGradeId
		 * @return int
		*/
		public static function CountByOrdemProducaoGradeId($intOrdemProducaoGradeId, $objOptionalClauses = null) {
			// Call CostureiraTempoReal::QueryCount to perform the CountByOrdemProducaoGradeId query
			return CostureiraTempoReal::QueryCount(
				QQ::Equal(QQN::CostureiraTempoReal()->OrdemProducaoGradeId, $intOrdemProducaoGradeId)
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
		 * Save this CostureiraTempoReal
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = CostureiraTempoReal::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `costureira_tempo_real` (
							`quantidade`,
							`ordem_producao_grade_id`,
							`costureira_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intQuantidade) . ',
							' . $objDatabase->SqlVariable($this->intOrdemProducaoGradeId) . ',
							' . $objDatabase->SqlVariable($this->intCostureiraId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('costureira_tempo_real', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`costureira_tempo_real`
						SET
							`quantidade` = ' . $objDatabase->SqlVariable($this->intQuantidade) . ',
							`ordem_producao_grade_id` = ' . $objDatabase->SqlVariable($this->intOrdemProducaoGradeId) . ',
							`costureira_id` = ' . $objDatabase->SqlVariable($this->intCostureiraId) . '
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
		 * Delete this CostureiraTempoReal
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this CostureiraTempoReal with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = CostureiraTempoReal::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`costureira_tempo_real`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all CostureiraTempoReals
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = CostureiraTempoReal::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`costureira_tempo_real`');
		}

		/**
		 * Truncate costureira_tempo_real table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = CostureiraTempoReal::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `costureira_tempo_real`');
		}

		/**
		 * Reload this CostureiraTempoReal from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved CostureiraTempoReal object.');

			// Reload the Object
			$objReloaded = CostureiraTempoReal::Load($this->intId);

			// Update $this's local variables to match
			$this->intQuantidade = $objReloaded->intQuantidade;
			$this->OrdemProducaoGradeId = $objReloaded->OrdemProducaoGradeId;
			$this->CostureiraId = $objReloaded->CostureiraId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = CostureiraTempoReal::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `costureira_tempo_real` (
					`id`,
					`quantidade`,
					`ordem_producao_grade_id`,
					`costureira_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intQuantidade) . ',
					' . $objDatabase->SqlVariable($this->intOrdemProducaoGradeId) . ',
					' . $objDatabase->SqlVariable($this->intCostureiraId) . ',
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
		 * @return CostureiraTempoReal[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = CostureiraTempoReal::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM costureira_tempo_real WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return CostureiraTempoReal::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return CostureiraTempoReal[]
		 */
		public function GetJournal() {
			return CostureiraTempoReal::GetJournalForId($this->intId);
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

				case 'Quantidade':
					// Gets the value for intQuantidade (Not Null)
					// @return integer
					return $this->intQuantidade;

				case 'OrdemProducaoGradeId':
					// Gets the value for intOrdemProducaoGradeId (Not Null)
					// @return integer
					return $this->intOrdemProducaoGradeId;

				case 'CostureiraId':
					// Gets the value for intCostureiraId (Unique)
					// @return integer
					return $this->intCostureiraId;


				///////////////////
				// Member Objects
				///////////////////
				case 'OrdemProducaoGrade':
					// Gets the value for the OrdemProducaoGrade object referenced by intOrdemProducaoGradeId (Not Null)
					// @return OrdemProducaoGrade
					try {
						if ((!$this->objOrdemProducaoGrade) && (!is_null($this->intOrdemProducaoGradeId)))
							$this->objOrdemProducaoGrade = OrdemProducaoGrade::Load($this->intOrdemProducaoGradeId);
						return $this->objOrdemProducaoGrade;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Costureira':
					// Gets the value for the Costureira object referenced by intCostureiraId (Unique)
					// @return Costureira
					try {
						if ((!$this->objCostureira) && (!is_null($this->intCostureiraId)))
							$this->objCostureira = Costureira::Load($this->intCostureiraId);
						return $this->objCostureira;
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
				case 'Quantidade':
					// Sets the value for intQuantidade (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intQuantidade = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'OrdemProducaoGradeId':
					// Sets the value for intOrdemProducaoGradeId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objOrdemProducaoGrade = null;
						return ($this->intOrdemProducaoGradeId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CostureiraId':
					// Sets the value for intCostureiraId (Unique)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objCostureira = null;
						return ($this->intCostureiraId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'OrdemProducaoGrade':
					// Sets the value for the OrdemProducaoGrade object referenced by intOrdemProducaoGradeId (Not Null)
					// @param OrdemProducaoGrade $mixValue
					// @return OrdemProducaoGrade
					if (is_null($mixValue)) {
						$this->intOrdemProducaoGradeId = null;
						$this->objOrdemProducaoGrade = null;
						return null;
					} else {
						// Make sure $mixValue actually is a OrdemProducaoGrade object
						try {
							$mixValue = QType::Cast($mixValue, 'OrdemProducaoGrade');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED OrdemProducaoGrade object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved OrdemProducaoGrade for this CostureiraTempoReal');

						// Update Local Member Variables
						$this->objOrdemProducaoGrade = $mixValue;
						$this->intOrdemProducaoGradeId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Costureira':
					// Sets the value for the Costureira object referenced by intCostureiraId (Unique)
					// @param Costureira $mixValue
					// @return Costureira
					if (is_null($mixValue)) {
						$this->intCostureiraId = null;
						$this->objCostureira = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Costureira object
						try {
							$mixValue = QType::Cast($mixValue, 'Costureira');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Costureira object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Costureira for this CostureiraTempoReal');

						// Update Local Member Variables
						$this->objCostureira = $mixValue;
						$this->intCostureiraId = $mixValue->Id;

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
			$strToReturn = '<complexType name="CostureiraTempoReal"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Quantidade" type="xsd:int"/>';
			$strToReturn .= '<element name="OrdemProducaoGrade" type="xsd1:OrdemProducaoGrade"/>';
			$strToReturn .= '<element name="Costureira" type="xsd1:Costureira"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('CostureiraTempoReal', $strComplexTypeArray)) {
				$strComplexTypeArray['CostureiraTempoReal'] = CostureiraTempoReal::GetSoapComplexTypeXml();
				OrdemProducaoGrade::AlterSoapComplexTypeArray($strComplexTypeArray);
				Costureira::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, CostureiraTempoReal::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new CostureiraTempoReal();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Quantidade'))
				$objToReturn->intQuantidade = $objSoapObject->Quantidade;
			if ((property_exists($objSoapObject, 'OrdemProducaoGrade')) &&
				($objSoapObject->OrdemProducaoGrade))
				$objToReturn->OrdemProducaoGrade = OrdemProducaoGrade::GetObjectFromSoapObject($objSoapObject->OrdemProducaoGrade);
			if ((property_exists($objSoapObject, 'Costureira')) &&
				($objSoapObject->Costureira))
				$objToReturn->Costureira = Costureira::GetObjectFromSoapObject($objSoapObject->Costureira);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, CostureiraTempoReal::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objOrdemProducaoGrade)
				$objObject->objOrdemProducaoGrade = OrdemProducaoGrade::GetSoapObjectFromObject($objObject->objOrdemProducaoGrade, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intOrdemProducaoGradeId = null;
			if ($objObject->objCostureira)
				$objObject->objCostureira = Costureira::GetSoapObjectFromObject($objObject->objCostureira, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCostureiraId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $Quantidade
	 * @property-read QQNode $OrdemProducaoGradeId
	 * @property-read QQNodeOrdemProducaoGrade $OrdemProducaoGrade
	 * @property-read QQNode $CostureiraId
	 * @property-read QQNodeCostureira $Costureira
	 */
	class QQNodeCostureiraTempoReal extends QQNode {
		protected $strTableName = 'costureira_tempo_real';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'CostureiraTempoReal';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Quantidade':
					return new QQNode('quantidade', 'Quantidade', 'integer', $this);
				case 'OrdemProducaoGradeId':
					return new QQNode('ordem_producao_grade_id', 'OrdemProducaoGradeId', 'integer', $this);
				case 'OrdemProducaoGrade':
					return new QQNodeOrdemProducaoGrade('ordem_producao_grade_id', 'OrdemProducaoGrade', 'integer', $this);
				case 'CostureiraId':
					return new QQNode('costureira_id', 'CostureiraId', 'integer', $this);
				case 'Costureira':
					return new QQNodeCostureira('costureira_id', 'Costureira', 'integer', $this);

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
	 * @property-read QQNode $Quantidade
	 * @property-read QQNode $OrdemProducaoGradeId
	 * @property-read QQNodeOrdemProducaoGrade $OrdemProducaoGrade
	 * @property-read QQNode $CostureiraId
	 * @property-read QQNodeCostureira $Costureira
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeCostureiraTempoReal extends QQReverseReferenceNode {
		protected $strTableName = 'costureira_tempo_real';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'CostureiraTempoReal';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Quantidade':
					return new QQNode('quantidade', 'Quantidade', 'integer', $this);
				case 'OrdemProducaoGradeId':
					return new QQNode('ordem_producao_grade_id', 'OrdemProducaoGradeId', 'integer', $this);
				case 'OrdemProducaoGrade':
					return new QQNodeOrdemProducaoGrade('ordem_producao_grade_id', 'OrdemProducaoGrade', 'integer', $this);
				case 'CostureiraId':
					return new QQNode('costureira_id', 'CostureiraId', 'integer', $this);
				case 'Costureira':
					return new QQNodeCostureira('costureira_id', 'Costureira', 'integer', $this);

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