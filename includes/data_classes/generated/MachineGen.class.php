<?php
	/**
	 * The abstract MachineGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Machine subclass which
	 * extends this MachineGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Machine class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Name the value for strName (Not Null)
	 * @property integer $MachineKindId the value for intMachineKindId (Not Null)
	 * @property MachineKind $MachineKind the value for the MachineKind object referenced by intMachineKindId (Not Null)
	 * @property Flowchart $_Flowchart the value for the private _objFlowchart (Read-Only) if set due to an expansion on the flowchart.machine_id reverse relationship
	 * @property Flowchart[] $_FlowchartArray the value for the private _objFlowchartArray (Read-Only) if set due to an ExpandAsArray on the flowchart.machine_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class MachineGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column machine.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column machine.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 150;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column machine.machine_kind_id
		 * @var integer intMachineKindId
		 */
		protected $intMachineKindId;
		const MachineKindIdDefault = null;


		/**
		 * Private member variable that stores a reference to a single Flowchart object
		 * (of type Flowchart), if this Machine object was restored with
		 * an expansion on the flowchart association table.
		 * @var Flowchart _objFlowchart;
		 */
		private $_objFlowchart;

		/**
		 * Private member variable that stores a reference to an array of Flowchart objects
		 * (of type Flowchart[]), if this Machine object was restored with
		 * an ExpandAsArray on the flowchart association table.
		 * @var Flowchart[] _objFlowchartArray;
		 */
		private $_objFlowchartArray = array();

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
		 * in the database column machine.machine_kind_id.
		 *
		 * NOTE: Always use the MachineKind property getter to correctly retrieve this MachineKind object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var MachineKind objMachineKind
		 */
		protected $objMachineKind;





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
		 * Load a Machine from PK Info
		 * @param integer $intId
		 * @return Machine
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Machine::QuerySingle(
				QQ::Equal(QQN::Machine()->Id, $intId)
			);
		}

		/**
		 * Load all Machines
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Machine[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Machine::QueryArray to perform the LoadAll query
			try {
				return Machine::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Machines
		 * @return int
		 */
		public static function CountAll() {
			// Call Machine::QueryCount to perform the CountAll query
			return Machine::QueryCount(QQ::All());
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
			$objDatabase = Machine::GetDatabase();

			// Create/Build out the QueryBuilder object with Machine-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'machine');
			Machine::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('machine');

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
		 * Static Qcodo Query method to query for a single Machine object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Machine the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Machine::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Machine object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Machine::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Machine::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Machine objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Machine[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Machine::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Machine::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Machine::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Machine objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Machine::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Machine::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'machine_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Machine-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Machine::GetSelectFields($objQueryBuilder);
				Machine::GetFromFields($objQueryBuilder);

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
			return Machine::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Machine
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'machine';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			$objBuilder->AddSelectItem($strTableName, 'machine_kind_id', $strAliasPrefix . 'machine_kind_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Machine from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Machine::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Machine
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
					$strAliasPrefix = 'machine__';


				$strAlias = $strAliasPrefix . 'flowchart__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objFlowchartArray)) {
						$objPreviousChildItem = $objPreviousItem->_objFlowchartArray[$intPreviousChildItemCount - 1];
						$objChildItem = Flowchart::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchart__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objFlowchartArray[] = $objChildItem;
					} else
						$objPreviousItem->_objFlowchartArray[] = Flowchart::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchart__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'machine__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Machine object
			$objToReturn = new Machine();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'machine_kind_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'machine_kind_id'] : $strAliasPrefix . 'machine_kind_id';
			$objToReturn->intMachineKindId = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'machine__';

			// Check for MachineKind Early Binding
			$strAlias = $strAliasPrefix . 'machine_kind_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMachineKind = MachineKind::InstantiateDbRow($objDbRow, $strAliasPrefix . 'machine_kind_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for Flowchart Virtual Binding
			$strAlias = $strAliasPrefix . 'flowchart__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFlowchartArray[] = Flowchart::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchart__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFlowchart = Flowchart::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchart__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Machines from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Machine[]
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
					$objItem = Machine::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Machine::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Machine object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Machine next row resulting from the query
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
			return Machine::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Machine object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Machine
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Machine::QuerySingle(
				QQ::Equal(QQN::Machine()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Machine objects,
		 * by MachineKindId Index(es)
		 * @param integer $intMachineKindId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Machine[]
		*/
		public static function LoadArrayByMachineKindId($intMachineKindId, $objOptionalClauses = null) {
			// Call Machine::QueryArray to perform the LoadArrayByMachineKindId query
			try {
				return Machine::QueryArray(
					QQ::Equal(QQN::Machine()->MachineKindId, $intMachineKindId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Machines
		 * by MachineKindId Index(es)
		 * @param integer $intMachineKindId
		 * @return int
		*/
		public static function CountByMachineKindId($intMachineKindId, $objOptionalClauses = null) {
			// Call Machine::QueryCount to perform the CountByMachineKindId query
			return Machine::QueryCount(
				QQ::Equal(QQN::Machine()->MachineKindId, $intMachineKindId)
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
		 * Save this Machine
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Machine::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `machine` (
							`name`,
							`machine_kind_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->intMachineKindId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('machine', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`machine`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`machine_kind_id` = ' . $objDatabase->SqlVariable($this->intMachineKindId) . '
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
		 * Delete this Machine
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Machine with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Machine::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`machine`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Machines
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Machine::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`machine`');
		}

		/**
		 * Truncate machine table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Machine::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `machine`');
		}

		/**
		 * Reload this Machine from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Machine object.');

			// Reload the Object
			$objReloaded = Machine::Load($this->intId);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->MachineKindId = $objReloaded->MachineKindId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Machine::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `machine` (
					`id`,
					`name`,
					`machine_kind_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strName) . ',
					' . $objDatabase->SqlVariable($this->intMachineKindId) . ',
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
		 * @return Machine[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Machine::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM machine WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Machine::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Machine[]
		 */
		public function GetJournal() {
			return Machine::GetJournalForId($this->intId);
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
					// Gets the value for strName (Not Null)
					// @return string
					return $this->strName;

				case 'MachineKindId':
					// Gets the value for intMachineKindId (Not Null)
					// @return integer
					return $this->intMachineKindId;


				///////////////////
				// Member Objects
				///////////////////
				case 'MachineKind':
					// Gets the value for the MachineKind object referenced by intMachineKindId (Not Null)
					// @return MachineKind
					try {
						if ((!$this->objMachineKind) && (!is_null($this->intMachineKindId)))
							$this->objMachineKind = MachineKind::Load($this->intMachineKindId);
						return $this->objMachineKind;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Flowchart':
					// Gets the value for the private _objFlowchart (Read-Only)
					// if set due to an expansion on the flowchart.machine_id reverse relationship
					// @return Flowchart
					return $this->_objFlowchart;

				case '_FlowchartArray':
					// Gets the value for the private _objFlowchartArray (Read-Only)
					// if set due to an ExpandAsArray on the flowchart.machine_id reverse relationship
					// @return Flowchart[]
					return (array) $this->_objFlowchartArray;


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
					// Sets the value for strName (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MachineKindId':
					// Sets the value for intMachineKindId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objMachineKind = null;
						return ($this->intMachineKindId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'MachineKind':
					// Sets the value for the MachineKind object referenced by intMachineKindId (Not Null)
					// @param MachineKind $mixValue
					// @return MachineKind
					if (is_null($mixValue)) {
						$this->intMachineKindId = null;
						$this->objMachineKind = null;
						return null;
					} else {
						// Make sure $mixValue actually is a MachineKind object
						try {
							$mixValue = QType::Cast($mixValue, 'MachineKind');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED MachineKind object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved MachineKind for this Machine');

						// Update Local Member Variables
						$this->objMachineKind = $mixValue;
						$this->intMachineKindId = $mixValue->Id;

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

			
		
		// Related Objects' Methods for Flowchart
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Flowcharts as an array of Flowchart objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Flowchart[]
		*/ 
		public function GetFlowchartArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Flowchart::LoadArrayByMachineId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Flowcharts
		 * @return int
		*/ 
		public function CountFlowcharts() {
			if ((is_null($this->intId)))
				return 0;

			return Flowchart::CountByMachineId($this->intId);
		}

		/**
		 * Associates a Flowchart
		 * @param Flowchart $objFlowchart
		 * @return void
		*/ 
		public function AssociateFlowchart(Flowchart $objFlowchart) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFlowchart on this unsaved Machine.');
			if ((is_null($objFlowchart->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFlowchart on this Machine with an unsaved Flowchart.');

			// Get the Database Object for this Class
			$objDatabase = Machine::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`flowchart`
				SET
					`machine_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFlowchart->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objFlowchart->MachineId = $this->intId;
				$objFlowchart->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a Flowchart
		 * @param Flowchart $objFlowchart
		 * @return void
		*/ 
		public function UnassociateFlowchart(Flowchart $objFlowchart) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchart on this unsaved Machine.');
			if ((is_null($objFlowchart->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchart on this Machine with an unsaved Flowchart.');

			// Get the Database Object for this Class
			$objDatabase = Machine::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`flowchart`
				SET
					`machine_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFlowchart->Id) . ' AND
					`machine_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objFlowchart->MachineId = null;
				$objFlowchart->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all Flowcharts
		 * @return void
		*/ 
		public function UnassociateAllFlowcharts() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchart on this unsaved Machine.');

			// Get the Database Object for this Class
			$objDatabase = Machine::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Flowchart::LoadArrayByMachineId($this->intId) as $objFlowchart) {
					$objFlowchart->MachineId = null;
					$objFlowchart->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`flowchart`
				SET
					`machine_id` = null
				WHERE
					`machine_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated Flowchart
		 * @param Flowchart $objFlowchart
		 * @return void
		*/ 
		public function DeleteAssociatedFlowchart(Flowchart $objFlowchart) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchart on this unsaved Machine.');
			if ((is_null($objFlowchart->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchart on this Machine with an unsaved Flowchart.');

			// Get the Database Object for this Class
			$objDatabase = Machine::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFlowchart->Id) . ' AND
					`machine_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objFlowchart->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated Flowcharts
		 * @return void
		*/ 
		public function DeleteAllFlowcharts() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchart on this unsaved Machine.');

			// Get the Database Object for this Class
			$objDatabase = Machine::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Flowchart::LoadArrayByMachineId($this->intId) as $objFlowchart) {
					$objFlowchart->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart`
				WHERE
					`machine_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Machine"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="MachineKind" type="xsd1:MachineKind"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Machine', $strComplexTypeArray)) {
				$strComplexTypeArray['Machine'] = Machine::GetSoapComplexTypeXml();
				MachineKind::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Machine::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Machine();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if ((property_exists($objSoapObject, 'MachineKind')) &&
				($objSoapObject->MachineKind))
				$objToReturn->MachineKind = MachineKind::GetObjectFromSoapObject($objSoapObject->MachineKind);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Machine::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objMachineKind)
				$objObject->objMachineKind = MachineKind::GetSoapObjectFromObject($objObject->objMachineKind, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMachineKindId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $Name
	 * @property-read QQNode $MachineKindId
	 * @property-read QQNodeMachineKind $MachineKind
	 * @property-read QQReverseReferenceNodeFlowchart $Flowchart
	 */
	class QQNodeMachine extends QQNode {
		protected $strTableName = 'machine';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Machine';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'MachineKindId':
					return new QQNode('machine_kind_id', 'MachineKindId', 'integer', $this);
				case 'MachineKind':
					return new QQNodeMachineKind('machine_kind_id', 'MachineKind', 'integer', $this);
				case 'Flowchart':
					return new QQReverseReferenceNodeFlowchart($this, 'flowchart', 'reverse_reference', 'machine_id');

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
	 * @property-read QQNode $MachineKindId
	 * @property-read QQNodeMachineKind $MachineKind
	 * @property-read QQReverseReferenceNodeFlowchart $Flowchart
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeMachine extends QQReverseReferenceNode {
		protected $strTableName = 'machine';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Machine';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'MachineKindId':
					return new QQNode('machine_kind_id', 'MachineKindId', 'integer', $this);
				case 'MachineKind':
					return new QQNodeMachineKind('machine_kind_id', 'MachineKind', 'integer', $this);
				case 'Flowchart':
					return new QQReverseReferenceNodeFlowchart($this, 'flowchart', 'reverse_reference', 'machine_id');

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