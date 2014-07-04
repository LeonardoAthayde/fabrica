<?php
	/**
	 * The abstract CostureiraTempoEficienteGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the CostureiraTempoEficiente subclass which
	 * extends this CostureiraTempoEficienteGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the CostureiraTempoEficiente class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $CostureiraProducaoId the value for intCostureiraProducaoId (Not Null)
	 * @property QDateTime $Date the value for dttDate (Not Null)
	 * @property integer $Tempo the value for intTempo (Not Null)
	 * @property CostureiraProducao $CostureiraProducao the value for the CostureiraProducao object referenced by intCostureiraProducaoId (Not Null)
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CostureiraTempoEficienteGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column costureira_tempo_eficiente.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column costureira_tempo_eficiente.costureira_producao_id
		 * @var integer intCostureiraProducaoId
		 */
		protected $intCostureiraProducaoId;
		const CostureiraProducaoIdDefault = null;


		/**
		 * Protected member variable that maps to the database column costureira_tempo_eficiente.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column costureira_tempo_eficiente.tempo
		 * @var integer intTempo
		 */
		protected $intTempo;
		const TempoDefault = null;


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
		 * in the database column costureira_tempo_eficiente.costureira_producao_id.
		 *
		 * NOTE: Always use the CostureiraProducao property getter to correctly retrieve this CostureiraProducao object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CostureiraProducao objCostureiraProducao
		 */
		protected $objCostureiraProducao;





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
		 * Load a CostureiraTempoEficiente from PK Info
		 * @param integer $intId
		 * @return CostureiraTempoEficiente
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return CostureiraTempoEficiente::QuerySingle(
				QQ::Equal(QQN::CostureiraTempoEficiente()->Id, $intId)
			);
		}

		/**
		 * Load all CostureiraTempoEficientes
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CostureiraTempoEficiente[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call CostureiraTempoEficiente::QueryArray to perform the LoadAll query
			try {
				return CostureiraTempoEficiente::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all CostureiraTempoEficientes
		 * @return int
		 */
		public static function CountAll() {
			// Call CostureiraTempoEficiente::QueryCount to perform the CountAll query
			return CostureiraTempoEficiente::QueryCount(QQ::All());
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
			$objDatabase = CostureiraTempoEficiente::GetDatabase();

			// Create/Build out the QueryBuilder object with CostureiraTempoEficiente-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'costureira_tempo_eficiente');
			CostureiraTempoEficiente::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('costureira_tempo_eficiente');

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
		 * Static Qcodo Query method to query for a single CostureiraTempoEficiente object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CostureiraTempoEficiente the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CostureiraTempoEficiente::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new CostureiraTempoEficiente object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = CostureiraTempoEficiente::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return CostureiraTempoEficiente::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of CostureiraTempoEficiente objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CostureiraTempoEficiente[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CostureiraTempoEficiente::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return CostureiraTempoEficiente::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = CostureiraTempoEficiente::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of CostureiraTempoEficiente objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CostureiraTempoEficiente::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = CostureiraTempoEficiente::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'costureira_tempo_eficiente_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with CostureiraTempoEficiente-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				CostureiraTempoEficiente::GetSelectFields($objQueryBuilder);
				CostureiraTempoEficiente::GetFromFields($objQueryBuilder);

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
			return CostureiraTempoEficiente::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this CostureiraTempoEficiente
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'costureira_tempo_eficiente';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'costureira_producao_id', $strAliasPrefix . 'costureira_producao_id');
			$objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			$objBuilder->AddSelectItem($strTableName, 'tempo', $strAliasPrefix . 'tempo');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a CostureiraTempoEficiente from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this CostureiraTempoEficiente::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return CostureiraTempoEficiente
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the CostureiraTempoEficiente object
			$objToReturn = new CostureiraTempoEficiente();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'costureira_producao_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'costureira_producao_id'] : $strAliasPrefix . 'costureira_producao_id';
			$objToReturn->intCostureiraProducaoId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'date'] : $strAliasPrefix . 'date';
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'tempo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tempo'] : $strAliasPrefix . 'tempo';
			$objToReturn->intTempo = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'costureira_tempo_eficiente__';

			// Check for CostureiraProducao Early Binding
			$strAlias = $strAliasPrefix . 'costureira_producao_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCostureiraProducao = CostureiraProducao::InstantiateDbRow($objDbRow, $strAliasPrefix . 'costureira_producao_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of CostureiraTempoEficientes from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return CostureiraTempoEficiente[]
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
					$objItem = CostureiraTempoEficiente::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = CostureiraTempoEficiente::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single CostureiraTempoEficiente object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return CostureiraTempoEficiente next row resulting from the query
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
			return CostureiraTempoEficiente::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single CostureiraTempoEficiente object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return CostureiraTempoEficiente
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return CostureiraTempoEficiente::QuerySingle(
				QQ::Equal(QQN::CostureiraTempoEficiente()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of CostureiraTempoEficiente objects,
		 * by CostureiraProducaoId Index(es)
		 * @param integer $intCostureiraProducaoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CostureiraTempoEficiente[]
		*/
		public static function LoadArrayByCostureiraProducaoId($intCostureiraProducaoId, $objOptionalClauses = null) {
			// Call CostureiraTempoEficiente::QueryArray to perform the LoadArrayByCostureiraProducaoId query
			try {
				return CostureiraTempoEficiente::QueryArray(
					QQ::Equal(QQN::CostureiraTempoEficiente()->CostureiraProducaoId, $intCostureiraProducaoId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CostureiraTempoEficientes
		 * by CostureiraProducaoId Index(es)
		 * @param integer $intCostureiraProducaoId
		 * @return int
		*/
		public static function CountByCostureiraProducaoId($intCostureiraProducaoId, $objOptionalClauses = null) {
			// Call CostureiraTempoEficiente::QueryCount to perform the CountByCostureiraProducaoId query
			return CostureiraTempoEficiente::QueryCount(
				QQ::Equal(QQN::CostureiraTempoEficiente()->CostureiraProducaoId, $intCostureiraProducaoId)
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
		 * Save this CostureiraTempoEficiente
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = CostureiraTempoEficiente::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `costureira_tempo_eficiente` (
							`costureira_producao_id`,
							`date`,
							`tempo`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intCostureiraProducaoId) . ',
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->intTempo) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('costureira_tempo_eficiente', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`costureira_tempo_eficiente`
						SET
							`costureira_producao_id` = ' . $objDatabase->SqlVariable($this->intCostureiraProducaoId) . ',
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`tempo` = ' . $objDatabase->SqlVariable($this->intTempo) . '
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
		 * Delete this CostureiraTempoEficiente
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this CostureiraTempoEficiente with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = CostureiraTempoEficiente::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`costureira_tempo_eficiente`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all CostureiraTempoEficientes
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = CostureiraTempoEficiente::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`costureira_tempo_eficiente`');
		}

		/**
		 * Truncate costureira_tempo_eficiente table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = CostureiraTempoEficiente::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `costureira_tempo_eficiente`');
		}

		/**
		 * Reload this CostureiraTempoEficiente from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved CostureiraTempoEficiente object.');

			// Reload the Object
			$objReloaded = CostureiraTempoEficiente::Load($this->intId);

			// Update $this's local variables to match
			$this->CostureiraProducaoId = $objReloaded->CostureiraProducaoId;
			$this->dttDate = $objReloaded->dttDate;
			$this->intTempo = $objReloaded->intTempo;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = CostureiraTempoEficiente::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `costureira_tempo_eficiente` (
					`id`,
					`costureira_producao_id`,
					`date`,
					`tempo`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intCostureiraProducaoId) . ',
					' . $objDatabase->SqlVariable($this->dttDate) . ',
					' . $objDatabase->SqlVariable($this->intTempo) . ',
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
		 * @return CostureiraTempoEficiente[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = CostureiraTempoEficiente::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM costureira_tempo_eficiente WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return CostureiraTempoEficiente::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return CostureiraTempoEficiente[]
		 */
		public function GetJournal() {
			return CostureiraTempoEficiente::GetJournalForId($this->intId);
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

				case 'CostureiraProducaoId':
					// Gets the value for intCostureiraProducaoId (Not Null)
					// @return integer
					return $this->intCostureiraProducaoId;

				case 'Date':
					// Gets the value for dttDate (Not Null)
					// @return QDateTime
					return $this->dttDate;

				case 'Tempo':
					// Gets the value for intTempo (Not Null)
					// @return integer
					return $this->intTempo;


				///////////////////
				// Member Objects
				///////////////////
				case 'CostureiraProducao':
					// Gets the value for the CostureiraProducao object referenced by intCostureiraProducaoId (Not Null)
					// @return CostureiraProducao
					try {
						if ((!$this->objCostureiraProducao) && (!is_null($this->intCostureiraProducaoId)))
							$this->objCostureiraProducao = CostureiraProducao::Load($this->intCostureiraProducaoId);
						return $this->objCostureiraProducao;
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
				case 'CostureiraProducaoId':
					// Sets the value for intCostureiraProducaoId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objCostureiraProducao = null;
						return ($this->intCostureiraProducaoId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Date':
					// Sets the value for dttDate (Not Null)
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Tempo':
					// Sets the value for intTempo (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intTempo = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'CostureiraProducao':
					// Sets the value for the CostureiraProducao object referenced by intCostureiraProducaoId (Not Null)
					// @param CostureiraProducao $mixValue
					// @return CostureiraProducao
					if (is_null($mixValue)) {
						$this->intCostureiraProducaoId = null;
						$this->objCostureiraProducao = null;
						return null;
					} else {
						// Make sure $mixValue actually is a CostureiraProducao object
						try {
							$mixValue = QType::Cast($mixValue, 'CostureiraProducao');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED CostureiraProducao object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved CostureiraProducao for this CostureiraTempoEficiente');

						// Update Local Member Variables
						$this->objCostureiraProducao = $mixValue;
						$this->intCostureiraProducaoId = $mixValue->Id;

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
			$strToReturn = '<complexType name="CostureiraTempoEficiente"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="CostureiraProducao" type="xsd1:CostureiraProducao"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Tempo" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('CostureiraTempoEficiente', $strComplexTypeArray)) {
				$strComplexTypeArray['CostureiraTempoEficiente'] = CostureiraTempoEficiente::GetSoapComplexTypeXml();
				CostureiraProducao::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, CostureiraTempoEficiente::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new CostureiraTempoEficiente();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'CostureiraProducao')) &&
				($objSoapObject->CostureiraProducao))
				$objToReturn->CostureiraProducao = CostureiraProducao::GetObjectFromSoapObject($objSoapObject->CostureiraProducao);
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if (property_exists($objSoapObject, 'Tempo'))
				$objToReturn->intTempo = $objSoapObject->Tempo;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, CostureiraTempoEficiente::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objCostureiraProducao)
				$objObject->objCostureiraProducao = CostureiraProducao::GetSoapObjectFromObject($objObject->objCostureiraProducao, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCostureiraProducaoId = null;
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->__toString(QDateTime::FormatSoap);
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $CostureiraProducaoId
	 * @property-read QQNodeCostureiraProducao $CostureiraProducao
	 * @property-read QQNode $Date
	 * @property-read QQNode $Tempo
	 */
	class QQNodeCostureiraTempoEficiente extends QQNode {
		protected $strTableName = 'costureira_tempo_eficiente';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'CostureiraTempoEficiente';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'CostureiraProducaoId':
					return new QQNode('costureira_producao_id', 'CostureiraProducaoId', 'integer', $this);
				case 'CostureiraProducao':
					return new QQNodeCostureiraProducao('costureira_producao_id', 'CostureiraProducao', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'Tempo':
					return new QQNode('tempo', 'Tempo', 'integer', $this);

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
	 * @property-read QQNode $CostureiraProducaoId
	 * @property-read QQNodeCostureiraProducao $CostureiraProducao
	 * @property-read QQNode $Date
	 * @property-read QQNode $Tempo
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeCostureiraTempoEficiente extends QQReverseReferenceNode {
		protected $strTableName = 'costureira_tempo_eficiente';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'CostureiraTempoEficiente';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'CostureiraProducaoId':
					return new QQNode('costureira_producao_id', 'CostureiraProducaoId', 'integer', $this);
				case 'CostureiraProducao':
					return new QQNodeCostureiraProducao('costureira_producao_id', 'CostureiraProducao', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'Tempo':
					return new QQNode('tempo', 'Tempo', 'integer', $this);

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