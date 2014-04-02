<?php
	/**
	 * The abstract FlowchartGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Flowchart subclass which
	 * extends this FlowchartGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Flowchart class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $ReferenceId the value for intReferenceId (Not Null)
	 * @property integer $Order the value for intOrder (Not Null)
	 * @property integer $ActionsId the value for intActionsId 
	 * @property integer $MachineId the value for intMachineId 
	 * @property integer $Time the value for intTime 
	 * @property Reference $Reference the value for the Reference object referenced by intReferenceId (Not Null)
	 * @property Actions $Actions the value for the Actions object referenced by intActionsId 
	 * @property Machine $Machine the value for the Machine object referenced by intMachineId 
	 * @property FlowchartOp $_FlowchartOp the value for the private _objFlowchartOp (Read-Only) if set due to an expansion on the flowchart_op_assn association table
	 * @property FlowchartOp[] $_FlowchartOpArray the value for the private _objFlowchartOpArray (Read-Only) if set due to an ExpandAsArray on the flowchart_op_assn association table
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FlowchartGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column flowchart.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart.reference_id
		 * @var integer intReferenceId
		 */
		protected $intReferenceId;
		const ReferenceIdDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart.order
		 * @var integer intOrder
		 */
		protected $intOrder;
		const OrderDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart.actions_id
		 * @var integer intActionsId
		 */
		protected $intActionsId;
		const ActionsIdDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart.machine_id
		 * @var integer intMachineId
		 */
		protected $intMachineId;
		const MachineIdDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart.time
		 * @var integer intTime
		 */
		protected $intTime;
		const TimeDefault = null;


		/**
		 * Private member variable that stores a reference to a single FlowchartOp object
		 * (of type FlowchartOp), if this Flowchart object was restored with
		 * an expansion on the flowchart_op_assn association table.
		 * @var FlowchartOp _objFlowchartOp;
		 */
		private $_objFlowchartOp;

		/**
		 * Private member variable that stores a reference to an array of FlowchartOp objects
		 * (of type FlowchartOp[]), if this Flowchart object was restored with
		 * an ExpandAsArray on the flowchart_op_assn association table.
		 * @var FlowchartOp[] _objFlowchartOpArray;
		 */
		private $_objFlowchartOpArray = array();

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
		 * in the database column flowchart.reference_id.
		 *
		 * NOTE: Always use the Reference property getter to correctly retrieve this Reference object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Reference objReference
		 */
		protected $objReference;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column flowchart.actions_id.
		 *
		 * NOTE: Always use the Actions property getter to correctly retrieve this Actions object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Actions objActions
		 */
		protected $objActions;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column flowchart.machine_id.
		 *
		 * NOTE: Always use the Machine property getter to correctly retrieve this Machine object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Machine objMachine
		 */
		protected $objMachine;





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
		 * Load a Flowchart from PK Info
		 * @param integer $intId
		 * @return Flowchart
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Flowchart::QuerySingle(
				QQ::Equal(QQN::Flowchart()->Id, $intId)
			);
		}

		/**
		 * Load all Flowcharts
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Flowchart[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Flowchart::QueryArray to perform the LoadAll query
			try {
				return Flowchart::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Flowcharts
		 * @return int
		 */
		public static function CountAll() {
			// Call Flowchart::QueryCount to perform the CountAll query
			return Flowchart::QueryCount(QQ::All());
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
			$objDatabase = Flowchart::GetDatabase();

			// Create/Build out the QueryBuilder object with Flowchart-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'flowchart');
			Flowchart::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('flowchart');

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
		 * Static Qcodo Query method to query for a single Flowchart object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Flowchart the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Flowchart::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Flowchart object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Flowchart::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Flowchart::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Flowchart objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Flowchart[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Flowchart::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Flowchart::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Flowchart::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Flowchart objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Flowchart::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Flowchart::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'flowchart_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Flowchart-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Flowchart::GetSelectFields($objQueryBuilder);
				Flowchart::GetFromFields($objQueryBuilder);

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
			return Flowchart::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Flowchart
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'flowchart';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'reference_id', $strAliasPrefix . 'reference_id');
			$objBuilder->AddSelectItem($strTableName, 'order', $strAliasPrefix . 'order');
			$objBuilder->AddSelectItem($strTableName, 'actions_id', $strAliasPrefix . 'actions_id');
			$objBuilder->AddSelectItem($strTableName, 'machine_id', $strAliasPrefix . 'machine_id');
			$objBuilder->AddSelectItem($strTableName, 'time', $strAliasPrefix . 'time');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Flowchart from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Flowchart::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Flowchart
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intId == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'flowchart__';

				$strAlias = $strAliasPrefix . 'flowchartop__flowchart_op_id__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objFlowchartOpArray)) {
						$objPreviousChildItem = $objPreviousItem->_objFlowchartOpArray[$intPreviousChildItemCount - 1];
						$objChildItem = FlowchartOp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchartop__flowchart_op_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objFlowchartOpArray[] = $objChildItem;
					} else
						$objPreviousItem->_objFlowchartOpArray[] = FlowchartOp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchartop__flowchart_op_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}


				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'flowchart__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Flowchart object
			$objToReturn = new Flowchart();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'reference_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'reference_id'] : $strAliasPrefix . 'reference_id';
			$objToReturn->intReferenceId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'order', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'order'] : $strAliasPrefix . 'order';
			$objToReturn->intOrder = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'actions_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'actions_id'] : $strAliasPrefix . 'actions_id';
			$objToReturn->intActionsId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'machine_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'machine_id'] : $strAliasPrefix . 'machine_id';
			$objToReturn->intMachineId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'time', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'time'] : $strAliasPrefix . 'time';
			$objToReturn->intTime = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'flowchart__';

			// Check for Reference Early Binding
			$strAlias = $strAliasPrefix . 'reference_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objReference = Reference::InstantiateDbRow($objDbRow, $strAliasPrefix . 'reference_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Actions Early Binding
			$strAlias = $strAliasPrefix . 'actions_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objActions = Actions::InstantiateDbRow($objDbRow, $strAliasPrefix . 'actions_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Machine Early Binding
			$strAlias = $strAliasPrefix . 'machine_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMachine = Machine::InstantiateDbRow($objDbRow, $strAliasPrefix . 'machine_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);



			// Check for FlowchartOp Virtual Binding
			$strAlias = $strAliasPrefix . 'flowchartop__flowchart_op_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFlowchartOpArray[] = FlowchartOp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchartop__flowchart_op_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFlowchartOp = FlowchartOp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchartop__flowchart_op_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


			return $objToReturn;
		}

		/**
		 * Instantiate an array of Flowcharts from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Flowchart[]
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
					$objItem = Flowchart::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Flowchart::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Flowchart object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Flowchart next row resulting from the query
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
			return Flowchart::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Flowchart object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Flowchart
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Flowchart::QuerySingle(
				QQ::Equal(QQN::Flowchart()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Flowchart objects,
		 * by ActionsId Index(es)
		 * @param integer $intActionsId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Flowchart[]
		*/
		public static function LoadArrayByActionsId($intActionsId, $objOptionalClauses = null) {
			// Call Flowchart::QueryArray to perform the LoadArrayByActionsId query
			try {
				return Flowchart::QueryArray(
					QQ::Equal(QQN::Flowchart()->ActionsId, $intActionsId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Flowcharts
		 * by ActionsId Index(es)
		 * @param integer $intActionsId
		 * @return int
		*/
		public static function CountByActionsId($intActionsId, $objOptionalClauses = null) {
			// Call Flowchart::QueryCount to perform the CountByActionsId query
			return Flowchart::QueryCount(
				QQ::Equal(QQN::Flowchart()->ActionsId, $intActionsId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Flowchart objects,
		 * by MachineId Index(es)
		 * @param integer $intMachineId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Flowchart[]
		*/
		public static function LoadArrayByMachineId($intMachineId, $objOptionalClauses = null) {
			// Call Flowchart::QueryArray to perform the LoadArrayByMachineId query
			try {
				return Flowchart::QueryArray(
					QQ::Equal(QQN::Flowchart()->MachineId, $intMachineId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Flowcharts
		 * by MachineId Index(es)
		 * @param integer $intMachineId
		 * @return int
		*/
		public static function CountByMachineId($intMachineId, $objOptionalClauses = null) {
			// Call Flowchart::QueryCount to perform the CountByMachineId query
			return Flowchart::QueryCount(
				QQ::Equal(QQN::Flowchart()->MachineId, $intMachineId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Flowchart objects,
		 * by ReferenceId Index(es)
		 * @param integer $intReferenceId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Flowchart[]
		*/
		public static function LoadArrayByReferenceId($intReferenceId, $objOptionalClauses = null) {
			// Call Flowchart::QueryArray to perform the LoadArrayByReferenceId query
			try {
				return Flowchart::QueryArray(
					QQ::Equal(QQN::Flowchart()->ReferenceId, $intReferenceId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Flowcharts
		 * by ReferenceId Index(es)
		 * @param integer $intReferenceId
		 * @return int
		*/
		public static function CountByReferenceId($intReferenceId, $objOptionalClauses = null) {
			// Call Flowchart::QueryCount to perform the CountByReferenceId query
			return Flowchart::QueryCount(
				QQ::Equal(QQN::Flowchart()->ReferenceId, $intReferenceId)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of FlowchartOp objects for a given FlowchartOp
		 * via the flowchart_op_assn table
		 * @param integer $intFlowchartOpId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Flowchart[]
		*/
		public static function LoadArrayByFlowchartOp($intFlowchartOpId, $objOptionalClauses = null) {
			// Call Flowchart::QueryArray to perform the LoadArrayByFlowchartOp query
			try {
				return Flowchart::QueryArray(
					QQ::Equal(QQN::Flowchart()->FlowchartOp->FlowchartOpId, $intFlowchartOpId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Flowcharts for a given FlowchartOp
		 * via the flowchart_op_assn table
		 * @param integer $intFlowchartOpId
		 * @return int
		*/
		public static function CountByFlowchartOp($intFlowchartOpId, $objOptionalClauses = null) {
			return Flowchart::QueryCount(
				QQ::Equal(QQN::Flowchart()->FlowchartOp->FlowchartOpId, $intFlowchartOpId),
				$objOptionalClauses
			);
		}




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this Flowchart
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Flowchart::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `flowchart` (
							`reference_id`,
							`order`,
							`actions_id`,
							`machine_id`,
							`time`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intReferenceId) . ',
							' . $objDatabase->SqlVariable($this->intOrder) . ',
							' . $objDatabase->SqlVariable($this->intActionsId) . ',
							' . $objDatabase->SqlVariable($this->intMachineId) . ',
							' . $objDatabase->SqlVariable($this->intTime) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('flowchart', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`flowchart`
						SET
							`reference_id` = ' . $objDatabase->SqlVariable($this->intReferenceId) . ',
							`order` = ' . $objDatabase->SqlVariable($this->intOrder) . ',
							`actions_id` = ' . $objDatabase->SqlVariable($this->intActionsId) . ',
							`machine_id` = ' . $objDatabase->SqlVariable($this->intMachineId) . ',
							`time` = ' . $objDatabase->SqlVariable($this->intTime) . '
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
		 * Delete this Flowchart
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Flowchart with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Flowchart::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Flowcharts
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Flowchart::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart`');
		}

		/**
		 * Truncate flowchart table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Flowchart::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `flowchart`');
		}

		/**
		 * Reload this Flowchart from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Flowchart object.');

			// Reload the Object
			$objReloaded = Flowchart::Load($this->intId);

			// Update $this's local variables to match
			$this->ReferenceId = $objReloaded->ReferenceId;
			$this->intOrder = $objReloaded->intOrder;
			$this->ActionsId = $objReloaded->ActionsId;
			$this->MachineId = $objReloaded->MachineId;
			$this->intTime = $objReloaded->intTime;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Flowchart::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `flowchart` (
					`id`,
					`reference_id`,
					`order`,
					`actions_id`,
					`machine_id`,
					`time`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intReferenceId) . ',
					' . $objDatabase->SqlVariable($this->intOrder) . ',
					' . $objDatabase->SqlVariable($this->intActionsId) . ',
					' . $objDatabase->SqlVariable($this->intMachineId) . ',
					' . $objDatabase->SqlVariable($this->intTime) . ',
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
		 * @return Flowchart[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Flowchart::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM flowchart WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Flowchart::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Flowchart[]
		 */
		public function GetJournal() {
			return Flowchart::GetJournalForId($this->intId);
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

				case 'ReferenceId':
					// Gets the value for intReferenceId (Not Null)
					// @return integer
					return $this->intReferenceId;

				case 'Order':
					// Gets the value for intOrder (Not Null)
					// @return integer
					return $this->intOrder;

				case 'ActionsId':
					// Gets the value for intActionsId 
					// @return integer
					return $this->intActionsId;

				case 'MachineId':
					// Gets the value for intMachineId 
					// @return integer
					return $this->intMachineId;

				case 'Time':
					// Gets the value for intTime 
					// @return integer
					return $this->intTime;


				///////////////////
				// Member Objects
				///////////////////
				case 'Reference':
					// Gets the value for the Reference object referenced by intReferenceId (Not Null)
					// @return Reference
					try {
						if ((!$this->objReference) && (!is_null($this->intReferenceId)))
							$this->objReference = Reference::Load($this->intReferenceId);
						return $this->objReference;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Actions':
					// Gets the value for the Actions object referenced by intActionsId 
					// @return Actions
					try {
						if ((!$this->objActions) && (!is_null($this->intActionsId)))
							$this->objActions = Actions::Load($this->intActionsId);
						return $this->objActions;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Machine':
					// Gets the value for the Machine object referenced by intMachineId 
					// @return Machine
					try {
						if ((!$this->objMachine) && (!is_null($this->intMachineId)))
							$this->objMachine = Machine::Load($this->intMachineId);
						return $this->objMachine;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_FlowchartOp':
					// Gets the value for the private _objFlowchartOp (Read-Only)
					// if set due to an expansion on the flowchart_op_assn association table
					// @return FlowchartOp
					return $this->_objFlowchartOp;

				case '_FlowchartOpArray':
					// Gets the value for the private _objFlowchartOpArray (Read-Only)
					// if set due to an ExpandAsArray on the flowchart_op_assn association table
					// @return FlowchartOp[]
					return (array) $this->_objFlowchartOpArray;


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
				case 'ReferenceId':
					// Sets the value for intReferenceId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objReference = null;
						return ($this->intReferenceId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Order':
					// Sets the value for intOrder (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intOrder = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ActionsId':
					// Sets the value for intActionsId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objActions = null;
						return ($this->intActionsId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MachineId':
					// Sets the value for intMachineId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objMachine = null;
						return ($this->intMachineId = QType::Cast($mixValue, QType::Integer));
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


				///////////////////
				// Member Objects
				///////////////////
				case 'Reference':
					// Sets the value for the Reference object referenced by intReferenceId (Not Null)
					// @param Reference $mixValue
					// @return Reference
					if (is_null($mixValue)) {
						$this->intReferenceId = null;
						$this->objReference = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Reference object
						try {
							$mixValue = QType::Cast($mixValue, 'Reference');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Reference object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Reference for this Flowchart');

						// Update Local Member Variables
						$this->objReference = $mixValue;
						$this->intReferenceId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Actions':
					// Sets the value for the Actions object referenced by intActionsId 
					// @param Actions $mixValue
					// @return Actions
					if (is_null($mixValue)) {
						$this->intActionsId = null;
						$this->objActions = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Actions object
						try {
							$mixValue = QType::Cast($mixValue, 'Actions');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Actions object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Actions for this Flowchart');

						// Update Local Member Variables
						$this->objActions = $mixValue;
						$this->intActionsId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Machine':
					// Sets the value for the Machine object referenced by intMachineId 
					// @param Machine $mixValue
					// @return Machine
					if (is_null($mixValue)) {
						$this->intMachineId = null;
						$this->objMachine = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Machine object
						try {
							$mixValue = QType::Cast($mixValue, 'Machine');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Machine object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Machine for this Flowchart');

						// Update Local Member Variables
						$this->objMachine = $mixValue;
						$this->intMachineId = $mixValue->Id;

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

			
		// Related Many-to-Many Objects' Methods for FlowchartOp
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated FlowchartOps as an array of FlowchartOp objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartOp[]
		*/ 
		public function GetFlowchartOpArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FlowchartOp::LoadArrayByFlowchart($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated FlowchartOps
		 * @return int
		*/ 
		public function CountFlowchartOps() {
			if ((is_null($this->intId)))
				return 0;

			return FlowchartOp::CountByFlowchart($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific FlowchartOp
		 * @param FlowchartOp $objFlowchartOp
		 * @return bool
		*/
		public function IsFlowchartOpAssociated(FlowchartOp $objFlowchartOp) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsFlowchartOpAssociated on this unsaved Flowchart.');
			if ((is_null($objFlowchartOp->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsFlowchartOpAssociated on this Flowchart with an unsaved FlowchartOp.');

			$intRowCount = Flowchart::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Flowchart()->Id, $this->intId),
					QQ::Equal(QQN::Flowchart()->FlowchartOp->FlowchartOpId, $objFlowchartOp->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Journals the FlowchartOp relationship into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function JournalFlowchartOpAssociation($intAssociatedId, $strJournalCommand) {
			$objDatabase = Flowchart::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `flowchart_op_assn` (
					`flowchart_id`,
					`flowchart_op_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($intAssociatedId) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object's FlowchartOp relationship from the log database.
		 * @param integer intId
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalFlowchartOpAssociationForId($intId) {
			$objDatabase = Flowchart::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM flowchart_op_assn WHERE flowchart_id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's FlowchartOp relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalFlowchartOpAssociation() {
			return Flowchart::GetJournalFlowchartOpAssociationForId($this->intId);
		}

		/**
		 * Associates a FlowchartOp
		 * @param FlowchartOp $objFlowchartOp
		 * @return void
		*/ 
		public function AssociateFlowchartOp(FlowchartOp $objFlowchartOp) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFlowchartOp on this unsaved Flowchart.');
			if ((is_null($objFlowchartOp->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFlowchartOp on this Flowchart with an unsaved FlowchartOp.');

			// Get the Database Object for this Class
			$objDatabase = Flowchart::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `flowchart_op_assn` (
					`flowchart_id`,
					`flowchart_op_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objFlowchartOp->Id) . '
				)
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalFlowchartOpAssociation($objFlowchartOp->Id, 'INSERT');
		}

		/**
		 * Unassociates a FlowchartOp
		 * @param FlowchartOp $objFlowchartOp
		 * @return void
		*/ 
		public function UnassociateFlowchartOp(FlowchartOp $objFlowchartOp) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchartOp on this unsaved Flowchart.');
			if ((is_null($objFlowchartOp->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchartOp on this Flowchart with an unsaved FlowchartOp.');

			// Get the Database Object for this Class
			$objDatabase = Flowchart::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart_op_assn`
				WHERE
					`flowchart_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`flowchart_op_id` = ' . $objDatabase->SqlVariable($objFlowchartOp->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalFlowchartOpAssociation($objFlowchartOp->Id, 'DELETE');
		}

		/**
		 * Unassociates all FlowchartOps
		 * @return void
		*/ 
		public function UnassociateAllFlowchartOps() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllFlowchartOpArray on this unsaved Flowchart.');

			// Get the Database Object for this Class
			$objDatabase = Flowchart::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `flowchart_op_id` AS associated_id FROM `flowchart_op_assn` WHERE `flowchart_id` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalFlowchartOpAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart_op_assn`
				WHERE
					`flowchart_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Flowchart"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Reference" type="xsd1:Reference"/>';
			$strToReturn .= '<element name="Order" type="xsd:int"/>';
			$strToReturn .= '<element name="Actions" type="xsd1:Actions"/>';
			$strToReturn .= '<element name="Machine" type="xsd1:Machine"/>';
			$strToReturn .= '<element name="Time" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Flowchart', $strComplexTypeArray)) {
				$strComplexTypeArray['Flowchart'] = Flowchart::GetSoapComplexTypeXml();
				Reference::AlterSoapComplexTypeArray($strComplexTypeArray);
				Actions::AlterSoapComplexTypeArray($strComplexTypeArray);
				Machine::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Flowchart::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Flowchart();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'Reference')) &&
				($objSoapObject->Reference))
				$objToReturn->Reference = Reference::GetObjectFromSoapObject($objSoapObject->Reference);
			if (property_exists($objSoapObject, 'Order'))
				$objToReturn->intOrder = $objSoapObject->Order;
			if ((property_exists($objSoapObject, 'Actions')) &&
				($objSoapObject->Actions))
				$objToReturn->Actions = Actions::GetObjectFromSoapObject($objSoapObject->Actions);
			if ((property_exists($objSoapObject, 'Machine')) &&
				($objSoapObject->Machine))
				$objToReturn->Machine = Machine::GetObjectFromSoapObject($objSoapObject->Machine);
			if (property_exists($objSoapObject, 'Time'))
				$objToReturn->intTime = $objSoapObject->Time;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Flowchart::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objReference)
				$objObject->objReference = Reference::GetSoapObjectFromObject($objObject->objReference, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intReferenceId = null;
			if ($objObject->objActions)
				$objObject->objActions = Actions::GetSoapObjectFromObject($objObject->objActions, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intActionsId = null;
			if ($objObject->objMachine)
				$objObject->objMachine = Machine::GetSoapObjectFromObject($objObject->objMachine, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMachineId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $FlowchartOpId
	 * @property-read QQNodeFlowchartOp $FlowchartOp
	 * @property-read QQNodeFlowchartOp $_ChildTableNode
	 */
	class QQNodeFlowchartFlowchartOp extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'flowchartop';

		protected $strTableName = 'flowchart_op_assn';
		protected $strPrimaryKey = 'flowchart_id';
		protected $strClassName = 'FlowchartOp';

		public function __get($strName) {
			switch ($strName) {
				case 'FlowchartOpId':
					return new QQNode('flowchart_op_id', 'FlowchartOpId', 'integer', $this);
				case 'FlowchartOp':
					return new QQNodeFlowchartOp('flowchart_op_id', 'FlowchartOpId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeFlowchartOp('flowchart_op_id', 'FlowchartOpId', 'integer', $this);
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
	 * @property-read QQNode $ReferenceId
	 * @property-read QQNodeReference $Reference
	 * @property-read QQNode $Order
	 * @property-read QQNode $ActionsId
	 * @property-read QQNodeActions $Actions
	 * @property-read QQNode $MachineId
	 * @property-read QQNodeMachine $Machine
	 * @property-read QQNode $Time
	 * @property-read QQNodeFlowchartFlowchartOp $FlowchartOp
	 */
	class QQNodeFlowchart extends QQNode {
		protected $strTableName = 'flowchart';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Flowchart';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'ReferenceId':
					return new QQNode('reference_id', 'ReferenceId', 'integer', $this);
				case 'Reference':
					return new QQNodeReference('reference_id', 'Reference', 'integer', $this);
				case 'Order':
					return new QQNode('order', 'Order', 'integer', $this);
				case 'ActionsId':
					return new QQNode('actions_id', 'ActionsId', 'integer', $this);
				case 'Actions':
					return new QQNodeActions('actions_id', 'Actions', 'integer', $this);
				case 'MachineId':
					return new QQNode('machine_id', 'MachineId', 'integer', $this);
				case 'Machine':
					return new QQNodeMachine('machine_id', 'Machine', 'integer', $this);
				case 'Time':
					return new QQNode('time', 'Time', 'integer', $this);
				case 'FlowchartOp':
					return new QQNodeFlowchartFlowchartOp($this);

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
	 * @property-read QQNode $ReferenceId
	 * @property-read QQNodeReference $Reference
	 * @property-read QQNode $Order
	 * @property-read QQNode $ActionsId
	 * @property-read QQNodeActions $Actions
	 * @property-read QQNode $MachineId
	 * @property-read QQNodeMachine $Machine
	 * @property-read QQNode $Time
	 * @property-read QQNodeFlowchartFlowchartOp $FlowchartOp
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeFlowchart extends QQReverseReferenceNode {
		protected $strTableName = 'flowchart';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Flowchart';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'ReferenceId':
					return new QQNode('reference_id', 'ReferenceId', 'integer', $this);
				case 'Reference':
					return new QQNodeReference('reference_id', 'Reference', 'integer', $this);
				case 'Order':
					return new QQNode('order', 'Order', 'integer', $this);
				case 'ActionsId':
					return new QQNode('actions_id', 'ActionsId', 'integer', $this);
				case 'Actions':
					return new QQNodeActions('actions_id', 'Actions', 'integer', $this);
				case 'MachineId':
					return new QQNode('machine_id', 'MachineId', 'integer', $this);
				case 'Machine':
					return new QQNodeMachine('machine_id', 'Machine', 'integer', $this);
				case 'Time':
					return new QQNode('time', 'Time', 'integer', $this);
				case 'FlowchartOp':
					return new QQNodeFlowchartFlowchartOp($this);

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