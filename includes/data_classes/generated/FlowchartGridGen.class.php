<?php
	/**
	 * The abstract FlowchartGridGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the FlowchartGrid subclass which
	 * extends this FlowchartGridGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the FlowchartGrid class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $ColorId the value for intColorId 
	 * @property integer $SizeId the value for intSizeId 
	 * @property integer $Amount the value for intAmount (Not Null)
	 * @property integer $FlowchartOpId the value for intFlowchartOpId (Not Null)
	 * @property Color $Color the value for the Color object referenced by intColorId 
	 * @property Size $Size the value for the Size object referenced by intSizeId 
	 * @property FlowchartOp $FlowchartOp the value for the FlowchartOp object referenced by intFlowchartOpId (Not Null)
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FlowchartGridGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column flowchart_grid.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart_grid.color_id
		 * @var integer intColorId
		 */
		protected $intColorId;
		const ColorIdDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart_grid.size_id
		 * @var integer intSizeId
		 */
		protected $intSizeId;
		const SizeIdDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart_grid.amount
		 * @var integer intAmount
		 */
		protected $intAmount;
		const AmountDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart_grid.flowchart_op_id
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
		 * in the database column flowchart_grid.color_id.
		 *
		 * NOTE: Always use the Color property getter to correctly retrieve this Color object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Color objColor
		 */
		protected $objColor;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column flowchart_grid.size_id.
		 *
		 * NOTE: Always use the Size property getter to correctly retrieve this Size object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Size objSize
		 */
		protected $objSize;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column flowchart_grid.flowchart_op_id.
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
		 * Load a FlowchartGrid from PK Info
		 * @param integer $intId
		 * @return FlowchartGrid
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return FlowchartGrid::QuerySingle(
				QQ::Equal(QQN::FlowchartGrid()->Id, $intId)
			);
		}

		/**
		 * Load all FlowchartGrids
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartGrid[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call FlowchartGrid::QueryArray to perform the LoadAll query
			try {
				return FlowchartGrid::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all FlowchartGrids
		 * @return int
		 */
		public static function CountAll() {
			// Call FlowchartGrid::QueryCount to perform the CountAll query
			return FlowchartGrid::QueryCount(QQ::All());
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
			$objDatabase = FlowchartGrid::GetDatabase();

			// Create/Build out the QueryBuilder object with FlowchartGrid-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'flowchart_grid');
			FlowchartGrid::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('flowchart_grid');

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
		 * Static Qcodo Query method to query for a single FlowchartGrid object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FlowchartGrid the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FlowchartGrid::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new FlowchartGrid object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FlowchartGrid::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return FlowchartGrid::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of FlowchartGrid objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FlowchartGrid[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FlowchartGrid::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return FlowchartGrid::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = FlowchartGrid::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of FlowchartGrid objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FlowchartGrid::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = FlowchartGrid::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'flowchart_grid_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with FlowchartGrid-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				FlowchartGrid::GetSelectFields($objQueryBuilder);
				FlowchartGrid::GetFromFields($objQueryBuilder);

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
			return FlowchartGrid::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this FlowchartGrid
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'flowchart_grid';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'color_id', $strAliasPrefix . 'color_id');
			$objBuilder->AddSelectItem($strTableName, 'size_id', $strAliasPrefix . 'size_id');
			$objBuilder->AddSelectItem($strTableName, 'amount', $strAliasPrefix . 'amount');
			$objBuilder->AddSelectItem($strTableName, 'flowchart_op_id', $strAliasPrefix . 'flowchart_op_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a FlowchartGrid from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this FlowchartGrid::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return FlowchartGrid
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the FlowchartGrid object
			$objToReturn = new FlowchartGrid();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'color_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'color_id'] : $strAliasPrefix . 'color_id';
			$objToReturn->intColorId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'size_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'size_id'] : $strAliasPrefix . 'size_id';
			$objToReturn->intSizeId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'amount', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'amount'] : $strAliasPrefix . 'amount';
			$objToReturn->intAmount = $objDbRow->GetColumn($strAliasName, 'Integer');
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
				$strAliasPrefix = 'flowchart_grid__';

			// Check for Color Early Binding
			$strAlias = $strAliasPrefix . 'color_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objColor = Color::InstantiateDbRow($objDbRow, $strAliasPrefix . 'color_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Size Early Binding
			$strAlias = $strAliasPrefix . 'size_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSize = Size::InstantiateDbRow($objDbRow, $strAliasPrefix . 'size_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FlowchartOp Early Binding
			$strAlias = $strAliasPrefix . 'flowchart_op_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFlowchartOp = FlowchartOp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchart_op_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of FlowchartGrids from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return FlowchartGrid[]
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
					$objItem = FlowchartGrid::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = FlowchartGrid::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single FlowchartGrid object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return FlowchartGrid next row resulting from the query
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
			return FlowchartGrid::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single FlowchartGrid object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return FlowchartGrid
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return FlowchartGrid::QuerySingle(
				QQ::Equal(QQN::FlowchartGrid()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load a single FlowchartGrid object,
		 * by ColorId, SizeId, FlowchartOpId Index(es)
		 * @param integer $intColorId
		 * @param integer $intSizeId
		 * @param integer $intFlowchartOpId
		 * @return FlowchartGrid
		*/
		public static function LoadByColorIdSizeIdFlowchartOpId($intColorId, $intSizeId, $intFlowchartOpId, $objOptionalClauses = null) {
			return FlowchartGrid::QuerySingle(
				QQ::AndCondition(
				QQ::Equal(QQN::FlowchartGrid()->ColorId, $intColorId),
				QQ::Equal(QQN::FlowchartGrid()->SizeId, $intSizeId),
				QQ::Equal(QQN::FlowchartGrid()->FlowchartOpId, $intFlowchartOpId)
				)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FlowchartGrid objects,
		 * by ColorId Index(es)
		 * @param integer $intColorId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartGrid[]
		*/
		public static function LoadArrayByColorId($intColorId, $objOptionalClauses = null) {
			// Call FlowchartGrid::QueryArray to perform the LoadArrayByColorId query
			try {
				return FlowchartGrid::QueryArray(
					QQ::Equal(QQN::FlowchartGrid()->ColorId, $intColorId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FlowchartGrids
		 * by ColorId Index(es)
		 * @param integer $intColorId
		 * @return int
		*/
		public static function CountByColorId($intColorId, $objOptionalClauses = null) {
			// Call FlowchartGrid::QueryCount to perform the CountByColorId query
			return FlowchartGrid::QueryCount(
				QQ::Equal(QQN::FlowchartGrid()->ColorId, $intColorId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FlowchartGrid objects,
		 * by SizeId Index(es)
		 * @param integer $intSizeId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartGrid[]
		*/
		public static function LoadArrayBySizeId($intSizeId, $objOptionalClauses = null) {
			// Call FlowchartGrid::QueryArray to perform the LoadArrayBySizeId query
			try {
				return FlowchartGrid::QueryArray(
					QQ::Equal(QQN::FlowchartGrid()->SizeId, $intSizeId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FlowchartGrids
		 * by SizeId Index(es)
		 * @param integer $intSizeId
		 * @return int
		*/
		public static function CountBySizeId($intSizeId, $objOptionalClauses = null) {
			// Call FlowchartGrid::QueryCount to perform the CountBySizeId query
			return FlowchartGrid::QueryCount(
				QQ::Equal(QQN::FlowchartGrid()->SizeId, $intSizeId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FlowchartGrid objects,
		 * by FlowchartOpId Index(es)
		 * @param integer $intFlowchartOpId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartGrid[]
		*/
		public static function LoadArrayByFlowchartOpId($intFlowchartOpId, $objOptionalClauses = null) {
			// Call FlowchartGrid::QueryArray to perform the LoadArrayByFlowchartOpId query
			try {
				return FlowchartGrid::QueryArray(
					QQ::Equal(QQN::FlowchartGrid()->FlowchartOpId, $intFlowchartOpId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FlowchartGrids
		 * by FlowchartOpId Index(es)
		 * @param integer $intFlowchartOpId
		 * @return int
		*/
		public static function CountByFlowchartOpId($intFlowchartOpId, $objOptionalClauses = null) {
			// Call FlowchartGrid::QueryCount to perform the CountByFlowchartOpId query
			return FlowchartGrid::QueryCount(
				QQ::Equal(QQN::FlowchartGrid()->FlowchartOpId, $intFlowchartOpId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FlowchartGrid objects,
		 * by ColorId, FlowchartOpId Index(es)
		 * @param integer $intColorId
		 * @param integer $intFlowchartOpId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartGrid[]
		*/
		public static function LoadArrayByColorIdFlowchartOpId($intColorId, $intFlowchartOpId, $objOptionalClauses = null) {
			// Call FlowchartGrid::QueryArray to perform the LoadArrayByColorIdFlowchartOpId query
			try {
				return FlowchartGrid::QueryArray(
					QQ::AndCondition(
					QQ::Equal(QQN::FlowchartGrid()->ColorId, $intColorId),
					QQ::Equal(QQN::FlowchartGrid()->FlowchartOpId, $intFlowchartOpId)
					),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FlowchartGrids
		 * by ColorId, FlowchartOpId Index(es)
		 * @param integer $intColorId
		 * @param integer $intFlowchartOpId
		 * @return int
		*/
		public static function CountByColorIdFlowchartOpId($intColorId, $intFlowchartOpId, $objOptionalClauses = null) {
			// Call FlowchartGrid::QueryCount to perform the CountByColorIdFlowchartOpId query
			return FlowchartGrid::QueryCount(
				QQ::AndCondition(
				QQ::Equal(QQN::FlowchartGrid()->ColorId, $intColorId),
				QQ::Equal(QQN::FlowchartGrid()->FlowchartOpId, $intFlowchartOpId)
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
		 * Save this FlowchartGrid
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = FlowchartGrid::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `flowchart_grid` (
							`color_id`,
							`size_id`,
							`amount`,
							`flowchart_op_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intColorId) . ',
							' . $objDatabase->SqlVariable($this->intSizeId) . ',
							' . $objDatabase->SqlVariable($this->intAmount) . ',
							' . $objDatabase->SqlVariable($this->intFlowchartOpId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('flowchart_grid', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`flowchart_grid`
						SET
							`color_id` = ' . $objDatabase->SqlVariable($this->intColorId) . ',
							`size_id` = ' . $objDatabase->SqlVariable($this->intSizeId) . ',
							`amount` = ' . $objDatabase->SqlVariable($this->intAmount) . ',
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
		 * Delete this FlowchartGrid
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this FlowchartGrid with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartGrid::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart_grid`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all FlowchartGrids
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = FlowchartGrid::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart_grid`');
		}

		/**
		 * Truncate flowchart_grid table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = FlowchartGrid::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `flowchart_grid`');
		}

		/**
		 * Reload this FlowchartGrid from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved FlowchartGrid object.');

			// Reload the Object
			$objReloaded = FlowchartGrid::Load($this->intId);

			// Update $this's local variables to match
			$this->ColorId = $objReloaded->ColorId;
			$this->SizeId = $objReloaded->SizeId;
			$this->intAmount = $objReloaded->intAmount;
			$this->FlowchartOpId = $objReloaded->FlowchartOpId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = FlowchartGrid::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `flowchart_grid` (
					`id`,
					`color_id`,
					`size_id`,
					`amount`,
					`flowchart_op_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intColorId) . ',
					' . $objDatabase->SqlVariable($this->intSizeId) . ',
					' . $objDatabase->SqlVariable($this->intAmount) . ',
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
		 * @return FlowchartGrid[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = FlowchartGrid::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM flowchart_grid WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return FlowchartGrid::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return FlowchartGrid[]
		 */
		public function GetJournal() {
			return FlowchartGrid::GetJournalForId($this->intId);
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

				case 'ColorId':
					// Gets the value for intColorId 
					// @return integer
					return $this->intColorId;

				case 'SizeId':
					// Gets the value for intSizeId 
					// @return integer
					return $this->intSizeId;

				case 'Amount':
					// Gets the value for intAmount (Not Null)
					// @return integer
					return $this->intAmount;

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

				case 'Size':
					// Gets the value for the Size object referenced by intSizeId 
					// @return Size
					try {
						if ((!$this->objSize) && (!is_null($this->intSizeId)))
							$this->objSize = Size::Load($this->intSizeId);
						return $this->objSize;
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

				case 'SizeId':
					// Sets the value for intSizeId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objSize = null;
						return ($this->intSizeId = QType::Cast($mixValue, QType::Integer));
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
							throw new QCallerException('Unable to set an unsaved Color for this FlowchartGrid');

						// Update Local Member Variables
						$this->objColor = $mixValue;
						$this->intColorId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Size':
					// Sets the value for the Size object referenced by intSizeId 
					// @param Size $mixValue
					// @return Size
					if (is_null($mixValue)) {
						$this->intSizeId = null;
						$this->objSize = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Size object
						try {
							$mixValue = QType::Cast($mixValue, 'Size');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Size object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Size for this FlowchartGrid');

						// Update Local Member Variables
						$this->objSize = $mixValue;
						$this->intSizeId = $mixValue->Id;

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
							throw new QCallerException('Unable to set an unsaved FlowchartOp for this FlowchartGrid');

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
			$strToReturn = '<complexType name="FlowchartGrid"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Color" type="xsd1:Color"/>';
			$strToReturn .= '<element name="Size" type="xsd1:Size"/>';
			$strToReturn .= '<element name="Amount" type="xsd:int"/>';
			$strToReturn .= '<element name="FlowchartOp" type="xsd1:FlowchartOp"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('FlowchartGrid', $strComplexTypeArray)) {
				$strComplexTypeArray['FlowchartGrid'] = FlowchartGrid::GetSoapComplexTypeXml();
				Color::AlterSoapComplexTypeArray($strComplexTypeArray);
				Size::AlterSoapComplexTypeArray($strComplexTypeArray);
				FlowchartOp::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, FlowchartGrid::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new FlowchartGrid();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'Color')) &&
				($objSoapObject->Color))
				$objToReturn->Color = Color::GetObjectFromSoapObject($objSoapObject->Color);
			if ((property_exists($objSoapObject, 'Size')) &&
				($objSoapObject->Size))
				$objToReturn->Size = Size::GetObjectFromSoapObject($objSoapObject->Size);
			if (property_exists($objSoapObject, 'Amount'))
				$objToReturn->intAmount = $objSoapObject->Amount;
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
				array_push($objArrayToReturn, FlowchartGrid::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objColor)
				$objObject->objColor = Color::GetSoapObjectFromObject($objObject->objColor, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intColorId = null;
			if ($objObject->objSize)
				$objObject->objSize = Size::GetSoapObjectFromObject($objObject->objSize, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSizeId = null;
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
	 * @property-read QQNode $ColorId
	 * @property-read QQNodeColor $Color
	 * @property-read QQNode $SizeId
	 * @property-read QQNodeSize $Size
	 * @property-read QQNode $Amount
	 * @property-read QQNode $FlowchartOpId
	 * @property-read QQNodeFlowchartOp $FlowchartOp
	 */
	class QQNodeFlowchartGrid extends QQNode {
		protected $strTableName = 'flowchart_grid';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FlowchartGrid';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'ColorId':
					return new QQNode('color_id', 'ColorId', 'integer', $this);
				case 'Color':
					return new QQNodeColor('color_id', 'Color', 'integer', $this);
				case 'SizeId':
					return new QQNode('size_id', 'SizeId', 'integer', $this);
				case 'Size':
					return new QQNodeSize('size_id', 'Size', 'integer', $this);
				case 'Amount':
					return new QQNode('amount', 'Amount', 'integer', $this);
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
	 * @property-read QQNode $ColorId
	 * @property-read QQNodeColor $Color
	 * @property-read QQNode $SizeId
	 * @property-read QQNodeSize $Size
	 * @property-read QQNode $Amount
	 * @property-read QQNode $FlowchartOpId
	 * @property-read QQNodeFlowchartOp $FlowchartOp
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeFlowchartGrid extends QQReverseReferenceNode {
		protected $strTableName = 'flowchart_grid';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FlowchartGrid';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'ColorId':
					return new QQNode('color_id', 'ColorId', 'integer', $this);
				case 'Color':
					return new QQNodeColor('color_id', 'Color', 'integer', $this);
				case 'SizeId':
					return new QQNode('size_id', 'SizeId', 'integer', $this);
				case 'Size':
					return new QQNodeSize('size_id', 'Size', 'integer', $this);
				case 'Amount':
					return new QQNode('amount', 'Amount', 'integer', $this);
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