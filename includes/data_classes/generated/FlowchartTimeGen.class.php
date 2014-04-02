<?php
	/**
	 * The abstract FlowchartTimeGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the FlowchartTime subclass which
	 * extends this FlowchartTimeGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the FlowchartTime class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Name the value for strName 
	 * @property integer $Time the value for intTime 
	 * @property integer $ColorId the value for intColorId 
	 * @property integer $Amount the value for intAmount (Not Null)
	 * @property QDateTime $Date the value for dttDate 
	 * @property integer $FlowchartId the value for intFlowchartId (Not Null)
	 * @property integer $FlowchartOpId the value for intFlowchartOpId (Not Null)
	 * @property Color $Color the value for the Color object referenced by intColorId 
	 * @property FlowchartOp $FlowchartOp the value for the FlowchartOp object referenced by intFlowchartOpId (Not Null)
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FlowchartTimeGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column flowchart_time.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart_time.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 150;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart_time.time
		 * @var integer intTime
		 */
		protected $intTime;
		const TimeDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart_time.color_id
		 * @var integer intColorId
		 */
		protected $intColorId;
		const ColorIdDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart_time.amount
		 * @var integer intAmount
		 */
		protected $intAmount;
		const AmountDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart_time.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart_time.flowchart_id
		 * @var integer intFlowchartId
		 */
		protected $intFlowchartId;
		const FlowchartIdDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart_time.flowchart_op_id
		 * @var integer intFlowchartOpId
		 */
		protected $intFlowchartOpId;
		const FlowchartOpIdDefault = null;


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
		 * in the database column flowchart_time.color_id.
		 *
		 * NOTE: Always use the Color property getter to correctly retrieve this Color object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Color objColor
		 */
		protected $objColor;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column flowchart_time.flowchart_op_id.
		 *
		 * NOTE: Always use the FlowchartOp property getter to correctly retrieve this FlowchartOp object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var FlowchartOp objFlowchartOp
		 */
		protected $objFlowchartOp;





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
		 * Load a FlowchartTime from PK Info
		 * @param integer $intId
		 * @return FlowchartTime
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return FlowchartTime::QuerySingle(
				QQ::Equal(QQN::FlowchartTime()->Id, $intId)
			);
		}

		/**
		 * Load all FlowchartTimes
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartTime[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call FlowchartTime::QueryArray to perform the LoadAll query
			try {
				return FlowchartTime::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all FlowchartTimes
		 * @return int
		 */
		public static function CountAll() {
			// Call FlowchartTime::QueryCount to perform the CountAll query
			return FlowchartTime::QueryCount(QQ::All());
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
			$objDatabase = FlowchartTime::GetDatabase();

			// Create/Build out the QueryBuilder object with FlowchartTime-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'flowchart_time');
			FlowchartTime::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('flowchart_time');

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
		 * Static Qcodo Query method to query for a single FlowchartTime object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FlowchartTime the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FlowchartTime::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new FlowchartTime object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FlowchartTime::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return FlowchartTime::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of FlowchartTime objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FlowchartTime[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FlowchartTime::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return FlowchartTime::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = FlowchartTime::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of FlowchartTime objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FlowchartTime::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = FlowchartTime::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'flowchart_time_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with FlowchartTime-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				FlowchartTime::GetSelectFields($objQueryBuilder);
				FlowchartTime::GetFromFields($objQueryBuilder);

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
			return FlowchartTime::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this FlowchartTime
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'flowchart_time';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			$objBuilder->AddSelectItem($strTableName, 'time', $strAliasPrefix . 'time');
			$objBuilder->AddSelectItem($strTableName, 'color_id', $strAliasPrefix . 'color_id');
			$objBuilder->AddSelectItem($strTableName, 'amount', $strAliasPrefix . 'amount');
			$objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			$objBuilder->AddSelectItem($strTableName, 'flowchart_id', $strAliasPrefix . 'flowchart_id');
			$objBuilder->AddSelectItem($strTableName, 'flowchart_op_id', $strAliasPrefix . 'flowchart_op_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a FlowchartTime from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this FlowchartTime::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return FlowchartTime
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the FlowchartTime object
			$objToReturn = new FlowchartTime();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'time', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'time'] : $strAliasPrefix . 'time';
			$objToReturn->intTime = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'color_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'color_id'] : $strAliasPrefix . 'color_id';
			$objToReturn->intColorId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'amount', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'amount'] : $strAliasPrefix . 'amount';
			$objToReturn->intAmount = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'date'] : $strAliasPrefix . 'date';
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'flowchart_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'flowchart_id'] : $strAliasPrefix . 'flowchart_id';
			$objToReturn->intFlowchartId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'flowchart_op_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'flowchart_op_id'] : $strAliasPrefix . 'flowchart_op_id';
			$objToReturn->intFlowchartOpId = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'flowchart_time__';

			// Check for Color Early Binding
			$strAlias = $strAliasPrefix . 'color_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objColor = Color::InstantiateDbRow($objDbRow, $strAliasPrefix . 'color_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FlowchartOp Early Binding
			$strAlias = $strAliasPrefix . 'flowchart_op_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFlowchartOp = FlowchartOp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchart_op_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of FlowchartTimes from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return FlowchartTime[]
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
					$objItem = FlowchartTime::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = FlowchartTime::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single FlowchartTime object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return FlowchartTime next row resulting from the query
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
			return FlowchartTime::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single FlowchartTime object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return FlowchartTime
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return FlowchartTime::QuerySingle(
				QQ::Equal(QQN::FlowchartTime()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load a single FlowchartTime object,
		 * by ColorId, FlowchartId, FlowchartOpId Index(es)
		 * @param integer $intColorId
		 * @param integer $intFlowchartId
		 * @param integer $intFlowchartOpId
		 * @return FlowchartTime
		*/
		public static function LoadByColorIdFlowchartIdFlowchartOpId($intColorId, $intFlowchartId, $intFlowchartOpId, $objOptionalClauses = null) {
			return FlowchartTime::QuerySingle(
				QQ::AndCondition(
				QQ::Equal(QQN::FlowchartTime()->ColorId, $intColorId),
				QQ::Equal(QQN::FlowchartTime()->FlowchartId, $intFlowchartId),
				QQ::Equal(QQN::FlowchartTime()->FlowchartOpId, $intFlowchartOpId)
				)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FlowchartTime objects,
		 * by FlowchartOpId Index(es)
		 * @param integer $intFlowchartOpId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartTime[]
		*/
		public static function LoadArrayByFlowchartOpId($intFlowchartOpId, $objOptionalClauses = null) {
			// Call FlowchartTime::QueryArray to perform the LoadArrayByFlowchartOpId query
			try {
				return FlowchartTime::QueryArray(
					QQ::Equal(QQN::FlowchartTime()->FlowchartOpId, $intFlowchartOpId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FlowchartTimes
		 * by FlowchartOpId Index(es)
		 * @param integer $intFlowchartOpId
		 * @return int
		*/
		public static function CountByFlowchartOpId($intFlowchartOpId, $objOptionalClauses = null) {
			// Call FlowchartTime::QueryCount to perform the CountByFlowchartOpId query
			return FlowchartTime::QueryCount(
				QQ::Equal(QQN::FlowchartTime()->FlowchartOpId, $intFlowchartOpId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FlowchartTime objects,
		 * by FlowchartId Index(es)
		 * @param integer $intFlowchartId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartTime[]
		*/
		public static function LoadArrayByFlowchartId($intFlowchartId, $objOptionalClauses = null) {
			// Call FlowchartTime::QueryArray to perform the LoadArrayByFlowchartId query
			try {
				return FlowchartTime::QueryArray(
					QQ::Equal(QQN::FlowchartTime()->FlowchartId, $intFlowchartId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FlowchartTimes
		 * by FlowchartId Index(es)
		 * @param integer $intFlowchartId
		 * @return int
		*/
		public static function CountByFlowchartId($intFlowchartId, $objOptionalClauses = null) {
			// Call FlowchartTime::QueryCount to perform the CountByFlowchartId query
			return FlowchartTime::QueryCount(
				QQ::Equal(QQN::FlowchartTime()->FlowchartId, $intFlowchartId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FlowchartTime objects,
		 * by ColorId Index(es)
		 * @param integer $intColorId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartTime[]
		*/
		public static function LoadArrayByColorId($intColorId, $objOptionalClauses = null) {
			// Call FlowchartTime::QueryArray to perform the LoadArrayByColorId query
			try {
				return FlowchartTime::QueryArray(
					QQ::Equal(QQN::FlowchartTime()->ColorId, $intColorId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FlowchartTimes
		 * by ColorId Index(es)
		 * @param integer $intColorId
		 * @return int
		*/
		public static function CountByColorId($intColorId, $objOptionalClauses = null) {
			// Call FlowchartTime::QueryCount to perform the CountByColorId query
			return FlowchartTime::QueryCount(
				QQ::Equal(QQN::FlowchartTime()->ColorId, $intColorId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FlowchartTime objects,
		 * by ColorId, FlowchartOpId Index(es)
		 * @param integer $intColorId
		 * @param integer $intFlowchartOpId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartTime[]
		*/
		public static function LoadArrayByColorIdFlowchartOpId($intColorId, $intFlowchartOpId, $objOptionalClauses = null) {
			// Call FlowchartTime::QueryArray to perform the LoadArrayByColorIdFlowchartOpId query
			try {
				return FlowchartTime::QueryArray(
					QQ::AndCondition(
					QQ::Equal(QQN::FlowchartTime()->ColorId, $intColorId),
					QQ::Equal(QQN::FlowchartTime()->FlowchartOpId, $intFlowchartOpId)
					),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FlowchartTimes
		 * by ColorId, FlowchartOpId Index(es)
		 * @param integer $intColorId
		 * @param integer $intFlowchartOpId
		 * @return int
		*/
		public static function CountByColorIdFlowchartOpId($intColorId, $intFlowchartOpId, $objOptionalClauses = null) {
			// Call FlowchartTime::QueryCount to perform the CountByColorIdFlowchartOpId query
			return FlowchartTime::QueryCount(
				QQ::AndCondition(
				QQ::Equal(QQN::FlowchartTime()->ColorId, $intColorId),
				QQ::Equal(QQN::FlowchartTime()->FlowchartOpId, $intFlowchartOpId)
				)
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
		 * Save this FlowchartTime
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = FlowchartTime::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `flowchart_time` (
							`name`,
							`time`,
							`color_id`,
							`amount`,
							`date`,
							`flowchart_id`,
							`flowchart_op_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->intTime) . ',
							' . $objDatabase->SqlVariable($this->intColorId) . ',
							' . $objDatabase->SqlVariable($this->intAmount) . ',
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->intFlowchartId) . ',
							' . $objDatabase->SqlVariable($this->intFlowchartOpId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('flowchart_time', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`flowchart_time`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`time` = ' . $objDatabase->SqlVariable($this->intTime) . ',
							`color_id` = ' . $objDatabase->SqlVariable($this->intColorId) . ',
							`amount` = ' . $objDatabase->SqlVariable($this->intAmount) . ',
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`flowchart_id` = ' . $objDatabase->SqlVariable($this->intFlowchartId) . ',
							`flowchart_op_id` = ' . $objDatabase->SqlVariable($this->intFlowchartOpId) . '
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
		 * Delete this FlowchartTime
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this FlowchartTime with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartTime::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart_time`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all FlowchartTimes
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = FlowchartTime::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart_time`');
		}

		/**
		 * Truncate flowchart_time table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = FlowchartTime::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `flowchart_time`');
		}

		/**
		 * Reload this FlowchartTime from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved FlowchartTime object.');

			// Reload the Object
			$objReloaded = FlowchartTime::Load($this->intId);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->intTime = $objReloaded->intTime;
			$this->ColorId = $objReloaded->ColorId;
			$this->intAmount = $objReloaded->intAmount;
			$this->dttDate = $objReloaded->dttDate;
			$this->intFlowchartId = $objReloaded->intFlowchartId;
			$this->FlowchartOpId = $objReloaded->FlowchartOpId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = FlowchartTime::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `flowchart_time` (
					`id`,
					`name`,
					`time`,
					`color_id`,
					`amount`,
					`date`,
					`flowchart_id`,
					`flowchart_op_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strName) . ',
					' . $objDatabase->SqlVariable($this->intTime) . ',
					' . $objDatabase->SqlVariable($this->intColorId) . ',
					' . $objDatabase->SqlVariable($this->intAmount) . ',
					' . $objDatabase->SqlVariable($this->dttDate) . ',
					' . $objDatabase->SqlVariable($this->intFlowchartId) . ',
					' . $objDatabase->SqlVariable($this->intFlowchartOpId) . ',
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
		 * @return FlowchartTime[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = FlowchartTime::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM flowchart_time WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return FlowchartTime::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return FlowchartTime[]
		 */
		public function GetJournal() {
			return FlowchartTime::GetJournalForId($this->intId);
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

				case 'Name':
					// Gets the value for strName 
					// @return string
					return $this->strName;

				case 'Time':
					// Gets the value for intTime 
					// @return integer
					return $this->intTime;

				case 'ColorId':
					// Gets the value for intColorId 
					// @return integer
					return $this->intColorId;

				case 'Amount':
					// Gets the value for intAmount (Not Null)
					// @return integer
					return $this->intAmount;

				case 'Date':
					// Gets the value for dttDate 
					// @return QDateTime
					return $this->dttDate;

				case 'FlowchartId':
					// Gets the value for intFlowchartId (Not Null)
					// @return integer
					return $this->intFlowchartId;

				case 'FlowchartOpId':
					// Gets the value for intFlowchartOpId (Not Null)
					// @return integer
					return $this->intFlowchartOpId;


				///////////////////
				// Member Objects
				///////////////////
				case 'Color':
					// Gets the value for the Color object referenced by intColorId 
					// @return Color
					try {
						if ((!$this->objColor) && (!is_null($this->intColorId)))
							$this->objColor = Color::Load($this->intColorId);
						return $this->objColor;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FlowchartOp':
					// Gets the value for the FlowchartOp object referenced by intFlowchartOpId (Not Null)
					// @return FlowchartOp
					try {
						if ((!$this->objFlowchartOp) && (!is_null($this->intFlowchartOpId)))
							$this->objFlowchartOp = FlowchartOp::Load($this->intFlowchartOpId);
						return $this->objFlowchartOp;
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
				case 'Name':
					// Sets the value for strName 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Time':
					// Sets the value for intTime 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intTime = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ColorId':
					// Sets the value for intColorId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objColor = null;
						return ($this->intColorId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Amount':
					// Sets the value for intAmount (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intAmount = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Date':
					// Sets the value for dttDate 
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FlowchartId':
					// Sets the value for intFlowchartId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intFlowchartId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FlowchartOpId':
					// Sets the value for intFlowchartOpId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objFlowchartOp = null;
						return ($this->intFlowchartOpId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Color':
					// Sets the value for the Color object referenced by intColorId 
					// @param Color $mixValue
					// @return Color
					if (is_null($mixValue)) {
						$this->intColorId = null;
						$this->objColor = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Color object
						try {
							$mixValue = QType::Cast($mixValue, 'Color');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Color object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Color for this FlowchartTime');

						// Update Local Member Variables
						$this->objColor = $mixValue;
						$this->intColorId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'FlowchartOp':
					// Sets the value for the FlowchartOp object referenced by intFlowchartOpId (Not Null)
					// @param FlowchartOp $mixValue
					// @return FlowchartOp
					if (is_null($mixValue)) {
						$this->intFlowchartOpId = null;
						$this->objFlowchartOp = null;
						return null;
					} else {
						// Make sure $mixValue actually is a FlowchartOp object
						try {
							$mixValue = QType::Cast($mixValue, 'FlowchartOp');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED FlowchartOp object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved FlowchartOp for this FlowchartTime');

						// Update Local Member Variables
						$this->objFlowchartOp = $mixValue;
						$this->intFlowchartOpId = $mixValue->Id;

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
			$strToReturn = '<complexType name="FlowchartTime"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Time" type="xsd:int"/>';
			$strToReturn .= '<element name="Color" type="xsd1:Color"/>';
			$strToReturn .= '<element name="Amount" type="xsd:int"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FlowchartId" type="xsd:int"/>';
			$strToReturn .= '<element name="FlowchartOp" type="xsd1:FlowchartOp"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('FlowchartTime', $strComplexTypeArray)) {
				$strComplexTypeArray['FlowchartTime'] = FlowchartTime::GetSoapComplexTypeXml();
				Color::AlterSoapComplexTypeArray($strComplexTypeArray);
				FlowchartOp::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, FlowchartTime::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new FlowchartTime();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Time'))
				$objToReturn->intTime = $objSoapObject->Time;
			if ((property_exists($objSoapObject, 'Color')) &&
				($objSoapObject->Color))
				$objToReturn->Color = Color::GetObjectFromSoapObject($objSoapObject->Color);
			if (property_exists($objSoapObject, 'Amount'))
				$objToReturn->intAmount = $objSoapObject->Amount;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if (property_exists($objSoapObject, 'FlowchartId'))
				$objToReturn->intFlowchartId = $objSoapObject->FlowchartId;
			if ((property_exists($objSoapObject, 'FlowchartOp')) &&
				($objSoapObject->FlowchartOp))
				$objToReturn->FlowchartOp = FlowchartOp::GetObjectFromSoapObject($objSoapObject->FlowchartOp);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, FlowchartTime::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objColor)
				$objObject->objColor = Color::GetSoapObjectFromObject($objObject->objColor, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intColorId = null;
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->__toString(QDateTime::FormatSoap);
			if ($objObject->objFlowchartOp)
				$objObject->objFlowchartOp = FlowchartOp::GetSoapObjectFromObject($objObject->objFlowchartOp, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFlowchartOpId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $Name
	 * @property-read QQNode $Time
	 * @property-read QQNode $ColorId
	 * @property-read QQNodeColor $Color
	 * @property-read QQNode $Amount
	 * @property-read QQNode $Date
	 * @property-read QQNode $FlowchartId
	 * @property-read QQNode $FlowchartOpId
	 * @property-read QQNodeFlowchartOp $FlowchartOp
	 */
	class QQNodeFlowchartTime extends QQNode {
		protected $strTableName = 'flowchart_time';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FlowchartTime';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Time':
					return new QQNode('time', 'Time', 'integer', $this);
				case 'ColorId':
					return new QQNode('color_id', 'ColorId', 'integer', $this);
				case 'Color':
					return new QQNodeColor('color_id', 'Color', 'integer', $this);
				case 'Amount':
					return new QQNode('amount', 'Amount', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'FlowchartId':
					return new QQNode('flowchart_id', 'FlowchartId', 'integer', $this);
				case 'FlowchartOpId':
					return new QQNode('flowchart_op_id', 'FlowchartOpId', 'integer', $this);
				case 'FlowchartOp':
					return new QQNodeFlowchartOp('flowchart_op_id', 'FlowchartOp', 'integer', $this);

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
	 * @property-read QQNode $Name
	 * @property-read QQNode $Time
	 * @property-read QQNode $ColorId
	 * @property-read QQNodeColor $Color
	 * @property-read QQNode $Amount
	 * @property-read QQNode $Date
	 * @property-read QQNode $FlowchartId
	 * @property-read QQNode $FlowchartOpId
	 * @property-read QQNodeFlowchartOp $FlowchartOp
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeFlowchartTime extends QQReverseReferenceNode {
		protected $strTableName = 'flowchart_time';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FlowchartTime';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Time':
					return new QQNode('time', 'Time', 'integer', $this);
				case 'ColorId':
					return new QQNode('color_id', 'ColorId', 'integer', $this);
				case 'Color':
					return new QQNodeColor('color_id', 'Color', 'integer', $this);
				case 'Amount':
					return new QQNode('amount', 'Amount', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'FlowchartId':
					return new QQNode('flowchart_id', 'FlowchartId', 'integer', $this);
				case 'FlowchartOpId':
					return new QQNode('flowchart_op_id', 'FlowchartOpId', 'integer', $this);
				case 'FlowchartOp':
					return new QQNodeFlowchartOp('flowchart_op_id', 'FlowchartOp', 'integer', $this);

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