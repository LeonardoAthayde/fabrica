<?php
	/**
	 * The abstract FlowchartOpGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the FlowchartOp subclass which
	 * extends this FlowchartOpGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the FlowchartOp class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $ProductionOrder the value for strProductionOrder (Not Null)
	 * @property integer $PackageId the value for intPackageId 
	 * @property string $Date the value for strDate (Read-Only Timestamp)
	 * @property Package $Package the value for the Package object referenced by intPackageId 
	 * @property Flowchart $_Flowchart the value for the private _objFlowchart (Read-Only) if set due to an expansion on the flowchart_op_assn association table
	 * @property Flowchart[] $_FlowchartArray the value for the private _objFlowchartArray (Read-Only) if set due to an ExpandAsArray on the flowchart_op_assn association table
	 * @property FlowchartGrid $_FlowchartGrid the value for the private _objFlowchartGrid (Read-Only) if set due to an expansion on the flowchart_grid.flowchart_op_id reverse relationship
	 * @property FlowchartGrid[] $_FlowchartGridArray the value for the private _objFlowchartGridArray (Read-Only) if set due to an ExpandAsArray on the flowchart_grid.flowchart_op_id reverse relationship
	 * @property FlowchartTime $_FlowchartTime the value for the private _objFlowchartTime (Read-Only) if set due to an expansion on the flowchart_time.flowchart_op_id reverse relationship
	 * @property FlowchartTime[] $_FlowchartTimeArray the value for the private _objFlowchartTimeArray (Read-Only) if set due to an ExpandAsArray on the flowchart_time.flowchart_op_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FlowchartOpGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column flowchart_op.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart_op.production_order
		 * @var string strProductionOrder
		 */
		protected $strProductionOrder;
		const ProductionOrderMaxLength = 150;
		const ProductionOrderDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart_op.package_id
		 * @var integer intPackageId
		 */
		protected $intPackageId;
		const PackageIdDefault = null;


		/**
		 * Protected member variable that maps to the database column flowchart_op.date
		 * @var string strDate
		 */
		protected $strDate;
		const DateDefault = null;


		/**
		 * Private member variable that stores a reference to a single Flowchart object
		 * (of type Flowchart), if this FlowchartOp object was restored with
		 * an expansion on the flowchart_op_assn association table.
		 * @var Flowchart _objFlowchart;
		 */
		private $_objFlowchart;

		/**
		 * Private member variable that stores a reference to an array of Flowchart objects
		 * (of type Flowchart[]), if this FlowchartOp object was restored with
		 * an ExpandAsArray on the flowchart_op_assn association table.
		 * @var Flowchart[] _objFlowchartArray;
		 */
		private $_objFlowchartArray = array();

		/**
		 * Private member variable that stores a reference to a single FlowchartGrid object
		 * (of type FlowchartGrid), if this FlowchartOp object was restored with
		 * an expansion on the flowchart_grid association table.
		 * @var FlowchartGrid _objFlowchartGrid;
		 */
		private $_objFlowchartGrid;

		/**
		 * Private member variable that stores a reference to an array of FlowchartGrid objects
		 * (of type FlowchartGrid[]), if this FlowchartOp object was restored with
		 * an ExpandAsArray on the flowchart_grid association table.
		 * @var FlowchartGrid[] _objFlowchartGridArray;
		 */
		private $_objFlowchartGridArray = array();

		/**
		 * Private member variable that stores a reference to a single FlowchartTime object
		 * (of type FlowchartTime), if this FlowchartOp object was restored with
		 * an expansion on the flowchart_time association table.
		 * @var FlowchartTime _objFlowchartTime;
		 */
		private $_objFlowchartTime;

		/**
		 * Private member variable that stores a reference to an array of FlowchartTime objects
		 * (of type FlowchartTime[]), if this FlowchartOp object was restored with
		 * an ExpandAsArray on the flowchart_time association table.
		 * @var FlowchartTime[] _objFlowchartTimeArray;
		 */
		private $_objFlowchartTimeArray = array();

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
		 * in the database column flowchart_op.package_id.
		 *
		 * NOTE: Always use the Package property getter to correctly retrieve this Package object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Package objPackage
		 */
		protected $objPackage;





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
		 * Load a FlowchartOp from PK Info
		 * @param integer $intId
		 * @return FlowchartOp
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return FlowchartOp::QuerySingle(
				QQ::Equal(QQN::FlowchartOp()->Id, $intId)
			);
		}

		/**
		 * Load all FlowchartOps
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartOp[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call FlowchartOp::QueryArray to perform the LoadAll query
			try {
				return FlowchartOp::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all FlowchartOps
		 * @return int
		 */
		public static function CountAll() {
			// Call FlowchartOp::QueryCount to perform the CountAll query
			return FlowchartOp::QueryCount(QQ::All());
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
			$objDatabase = FlowchartOp::GetDatabase();

			// Create/Build out the QueryBuilder object with FlowchartOp-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'flowchart_op');
			FlowchartOp::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('flowchart_op');

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
		 * Static Qcodo Query method to query for a single FlowchartOp object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FlowchartOp the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FlowchartOp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new FlowchartOp object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FlowchartOp::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return FlowchartOp::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of FlowchartOp objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FlowchartOp[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FlowchartOp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return FlowchartOp::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = FlowchartOp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of FlowchartOp objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FlowchartOp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = FlowchartOp::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'flowchart_op_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with FlowchartOp-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				FlowchartOp::GetSelectFields($objQueryBuilder);
				FlowchartOp::GetFromFields($objQueryBuilder);

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
			return FlowchartOp::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this FlowchartOp
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'flowchart_op';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'production_order', $strAliasPrefix . 'production_order');
			$objBuilder->AddSelectItem($strTableName, 'package_id', $strAliasPrefix . 'package_id');
			$objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a FlowchartOp from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this FlowchartOp::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return FlowchartOp
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
					$strAliasPrefix = 'flowchart_op__';

				$strAlias = $strAliasPrefix . 'flowchart__flowchart_id__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objFlowchartArray)) {
						$objPreviousChildItem = $objPreviousItem->_objFlowchartArray[$intPreviousChildItemCount - 1];
						$objChildItem = Flowchart::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchart__flowchart_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objFlowchartArray[] = $objChildItem;
					} else
						$objPreviousItem->_objFlowchartArray[] = Flowchart::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchart__flowchart_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}


				$strAlias = $strAliasPrefix . 'flowchartgrid__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objFlowchartGridArray)) {
						$objPreviousChildItem = $objPreviousItem->_objFlowchartGridArray[$intPreviousChildItemCount - 1];
						$objChildItem = FlowchartGrid::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchartgrid__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objFlowchartGridArray[] = $objChildItem;
					} else
						$objPreviousItem->_objFlowchartGridArray[] = FlowchartGrid::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchartgrid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'flowcharttime__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objFlowchartTimeArray)) {
						$objPreviousChildItem = $objPreviousItem->_objFlowchartTimeArray[$intPreviousChildItemCount - 1];
						$objChildItem = FlowchartTime::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowcharttime__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objFlowchartTimeArray[] = $objChildItem;
					} else
						$objPreviousItem->_objFlowchartTimeArray[] = FlowchartTime::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowcharttime__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'flowchart_op__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the FlowchartOp object
			$objToReturn = new FlowchartOp();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'production_order', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'production_order'] : $strAliasPrefix . 'production_order';
			$objToReturn->strProductionOrder = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'package_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'package_id'] : $strAliasPrefix . 'package_id';
			$objToReturn->intPackageId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'date'] : $strAliasPrefix . 'date';
			$objToReturn->strDate = $objDbRow->GetColumn($strAliasName, 'VarChar');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'flowchart_op__';

			// Check for Package Early Binding
			$strAlias = $strAliasPrefix . 'package_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPackage = Package::InstantiateDbRow($objDbRow, $strAliasPrefix . 'package_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);



			// Check for Flowchart Virtual Binding
			$strAlias = $strAliasPrefix . 'flowchart__flowchart_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFlowchartArray[] = Flowchart::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchart__flowchart_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFlowchart = Flowchart::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchart__flowchart_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


			// Check for FlowchartGrid Virtual Binding
			$strAlias = $strAliasPrefix . 'flowchartgrid__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFlowchartGridArray[] = FlowchartGrid::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchartgrid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFlowchartGrid = FlowchartGrid::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowchartgrid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for FlowchartTime Virtual Binding
			$strAlias = $strAliasPrefix . 'flowcharttime__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFlowchartTimeArray[] = FlowchartTime::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowcharttime__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFlowchartTime = FlowchartTime::InstantiateDbRow($objDbRow, $strAliasPrefix . 'flowcharttime__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of FlowchartOps from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return FlowchartOp[]
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
					$objItem = FlowchartOp::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = FlowchartOp::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single FlowchartOp object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return FlowchartOp next row resulting from the query
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
			return FlowchartOp::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single FlowchartOp object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return FlowchartOp
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return FlowchartOp::QuerySingle(
				QQ::Equal(QQN::FlowchartOp()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FlowchartOp objects,
		 * by PackageId Index(es)
		 * @param integer $intPackageId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartOp[]
		*/
		public static function LoadArrayByPackageId($intPackageId, $objOptionalClauses = null) {
			// Call FlowchartOp::QueryArray to perform the LoadArrayByPackageId query
			try {
				return FlowchartOp::QueryArray(
					QQ::Equal(QQN::FlowchartOp()->PackageId, $intPackageId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FlowchartOps
		 * by PackageId Index(es)
		 * @param integer $intPackageId
		 * @return int
		*/
		public static function CountByPackageId($intPackageId, $objOptionalClauses = null) {
			// Call FlowchartOp::QueryCount to perform the CountByPackageId query
			return FlowchartOp::QueryCount(
				QQ::Equal(QQN::FlowchartOp()->PackageId, $intPackageId)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of Flowchart objects for a given Flowchart
		 * via the flowchart_op_assn table
		 * @param integer $intFlowchartId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartOp[]
		*/
		public static function LoadArrayByFlowchart($intFlowchartId, $objOptionalClauses = null) {
			// Call FlowchartOp::QueryArray to perform the LoadArrayByFlowchart query
			try {
				return FlowchartOp::QueryArray(
					QQ::Equal(QQN::FlowchartOp()->Flowchart->FlowchartId, $intFlowchartId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FlowchartOps for a given Flowchart
		 * via the flowchart_op_assn table
		 * @param integer $intFlowchartId
		 * @return int
		*/
		public static function CountByFlowchart($intFlowchartId, $objOptionalClauses = null) {
			return FlowchartOp::QueryCount(
				QQ::Equal(QQN::FlowchartOp()->Flowchart->FlowchartId, $intFlowchartId),
				$objOptionalClauses
			);
		}




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this FlowchartOp
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `flowchart_op` (
							`production_order`,
							`package_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strProductionOrder) . ',
							' . $objDatabase->SqlVariable($this->intPackageId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('flowchart_op', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)
					if (!$blnForceUpdate) {
						// Perform the Optimistic Locking check
						$objResult = $objDatabase->Query('
							SELECT
								`date`
							FROM
								`flowchart_op`
							WHERE
								`id` = ' . $objDatabase->SqlVariable($this->intId) . '
						');
						
						$objRow = $objResult->FetchArray();
						if ($objRow[0] != $this->strDate)
							throw new QOptimisticLockingException('FlowchartOp');
					}

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`flowchart_op`
						SET
							`production_order` = ' . $objDatabase->SqlVariable($this->strProductionOrder) . ',
							`package_id` = ' . $objDatabase->SqlVariable($this->intPackageId) . '
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

			// Update Local Timestamp
			$objResult = $objDatabase->Query('
				SELECT
					`date`
				FROM
					`flowchart_op`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
						
			$objRow = $objResult->FetchArray();
			$this->strDate = $objRow[0];

			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this FlowchartOp
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this FlowchartOp with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart_op`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all FlowchartOps
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart_op`');
		}

		/**
		 * Truncate flowchart_op table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `flowchart_op`');
		}

		/**
		 * Reload this FlowchartOp from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved FlowchartOp object.');

			// Reload the Object
			$objReloaded = FlowchartOp::Load($this->intId);

			// Update $this's local variables to match
			$this->strProductionOrder = $objReloaded->strProductionOrder;
			$this->PackageId = $objReloaded->PackageId;
			$this->strDate = $objReloaded->strDate;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = FlowchartOp::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `flowchart_op` (
					`id`,
					`production_order`,
					`package_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strProductionOrder) . ',
					' . $objDatabase->SqlVariable($this->intPackageId) . ',
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
		 * @return FlowchartOp[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = FlowchartOp::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM flowchart_op WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return FlowchartOp::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return FlowchartOp[]
		 */
		public function GetJournal() {
			return FlowchartOp::GetJournalForId($this->intId);
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

				case 'ProductionOrder':
					// Gets the value for strProductionOrder (Not Null)
					// @return string
					return $this->strProductionOrder;

				case 'PackageId':
					// Gets the value for intPackageId 
					// @return integer
					return $this->intPackageId;

				case 'Date':
					// Gets the value for strDate (Read-Only Timestamp)
					// @return string
					return $this->strDate;


				///////////////////
				// Member Objects
				///////////////////
				case 'Package':
					// Gets the value for the Package object referenced by intPackageId 
					// @return Package
					try {
						if ((!$this->objPackage) && (!is_null($this->intPackageId)))
							$this->objPackage = Package::Load($this->intPackageId);
						return $this->objPackage;
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
					// if set due to an expansion on the flowchart_op_assn association table
					// @return Flowchart
					return $this->_objFlowchart;

				case '_FlowchartArray':
					// Gets the value for the private _objFlowchartArray (Read-Only)
					// if set due to an ExpandAsArray on the flowchart_op_assn association table
					// @return Flowchart[]
					return (array) $this->_objFlowchartArray;

				case '_FlowchartGrid':
					// Gets the value for the private _objFlowchartGrid (Read-Only)
					// if set due to an expansion on the flowchart_grid.flowchart_op_id reverse relationship
					// @return FlowchartGrid
					return $this->_objFlowchartGrid;

				case '_FlowchartGridArray':
					// Gets the value for the private _objFlowchartGridArray (Read-Only)
					// if set due to an ExpandAsArray on the flowchart_grid.flowchart_op_id reverse relationship
					// @return FlowchartGrid[]
					return (array) $this->_objFlowchartGridArray;

				case '_FlowchartTime':
					// Gets the value for the private _objFlowchartTime (Read-Only)
					// if set due to an expansion on the flowchart_time.flowchart_op_id reverse relationship
					// @return FlowchartTime
					return $this->_objFlowchartTime;

				case '_FlowchartTimeArray':
					// Gets the value for the private _objFlowchartTimeArray (Read-Only)
					// if set due to an ExpandAsArray on the flowchart_time.flowchart_op_id reverse relationship
					// @return FlowchartTime[]
					return (array) $this->_objFlowchartTimeArray;


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
				case 'ProductionOrder':
					// Sets the value for strProductionOrder (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strProductionOrder = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PackageId':
					// Sets the value for intPackageId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objPackage = null;
						return ($this->intPackageId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Package':
					// Sets the value for the Package object referenced by intPackageId 
					// @param Package $mixValue
					// @return Package
					if (is_null($mixValue)) {
						$this->intPackageId = null;
						$this->objPackage = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Package object
						try {
							$mixValue = QType::Cast($mixValue, 'Package');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Package object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Package for this FlowchartOp');

						// Update Local Member Variables
						$this->objPackage = $mixValue;
						$this->intPackageId = $mixValue->Id;

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

			
		
		// Related Objects' Methods for FlowchartGrid
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FlowchartGrids as an array of FlowchartGrid objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartGrid[]
		*/ 
		public function GetFlowchartGridArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FlowchartGrid::LoadArrayByFlowchartOpId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FlowchartGrids
		 * @return int
		*/ 
		public function CountFlowchartGrids() {
			if ((is_null($this->intId)))
				return 0;

			return FlowchartGrid::CountByFlowchartOpId($this->intId);
		}

		/**
		 * Associates a FlowchartGrid
		 * @param FlowchartGrid $objFlowchartGrid
		 * @return void
		*/ 
		public function AssociateFlowchartGrid(FlowchartGrid $objFlowchartGrid) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFlowchartGrid on this unsaved FlowchartOp.');
			if ((is_null($objFlowchartGrid->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFlowchartGrid on this FlowchartOp with an unsaved FlowchartGrid.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`flowchart_grid`
				SET
					`flowchart_op_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFlowchartGrid->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objFlowchartGrid->FlowchartOpId = $this->intId;
				$objFlowchartGrid->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a FlowchartGrid
		 * @param FlowchartGrid $objFlowchartGrid
		 * @return void
		*/ 
		public function UnassociateFlowchartGrid(FlowchartGrid $objFlowchartGrid) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchartGrid on this unsaved FlowchartOp.');
			if ((is_null($objFlowchartGrid->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchartGrid on this FlowchartOp with an unsaved FlowchartGrid.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`flowchart_grid`
				SET
					`flowchart_op_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFlowchartGrid->Id) . ' AND
					`flowchart_op_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objFlowchartGrid->FlowchartOpId = null;
				$objFlowchartGrid->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all FlowchartGrids
		 * @return void
		*/ 
		public function UnassociateAllFlowchartGrids() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchartGrid on this unsaved FlowchartOp.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (FlowchartGrid::LoadArrayByFlowchartOpId($this->intId) as $objFlowchartGrid) {
					$objFlowchartGrid->FlowchartOpId = null;
					$objFlowchartGrid->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`flowchart_grid`
				SET
					`flowchart_op_id` = null
				WHERE
					`flowchart_op_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated FlowchartGrid
		 * @param FlowchartGrid $objFlowchartGrid
		 * @return void
		*/ 
		public function DeleteAssociatedFlowchartGrid(FlowchartGrid $objFlowchartGrid) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchartGrid on this unsaved FlowchartOp.');
			if ((is_null($objFlowchartGrid->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchartGrid on this FlowchartOp with an unsaved FlowchartGrid.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart_grid`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFlowchartGrid->Id) . ' AND
					`flowchart_op_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objFlowchartGrid->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated FlowchartGrids
		 * @return void
		*/ 
		public function DeleteAllFlowchartGrids() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchartGrid on this unsaved FlowchartOp.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (FlowchartGrid::LoadArrayByFlowchartOpId($this->intId) as $objFlowchartGrid) {
					$objFlowchartGrid->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart_grid`
				WHERE
					`flowchart_op_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for FlowchartTime
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FlowchartTimes as an array of FlowchartTime objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FlowchartTime[]
		*/ 
		public function GetFlowchartTimeArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FlowchartTime::LoadArrayByFlowchartOpId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FlowchartTimes
		 * @return int
		*/ 
		public function CountFlowchartTimes() {
			if ((is_null($this->intId)))
				return 0;

			return FlowchartTime::CountByFlowchartOpId($this->intId);
		}

		/**
		 * Associates a FlowchartTime
		 * @param FlowchartTime $objFlowchartTime
		 * @return void
		*/ 
		public function AssociateFlowchartTime(FlowchartTime $objFlowchartTime) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFlowchartTime on this unsaved FlowchartOp.');
			if ((is_null($objFlowchartTime->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFlowchartTime on this FlowchartOp with an unsaved FlowchartTime.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`flowchart_time`
				SET
					`flowchart_op_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFlowchartTime->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objFlowchartTime->FlowchartOpId = $this->intId;
				$objFlowchartTime->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a FlowchartTime
		 * @param FlowchartTime $objFlowchartTime
		 * @return void
		*/ 
		public function UnassociateFlowchartTime(FlowchartTime $objFlowchartTime) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchartTime on this unsaved FlowchartOp.');
			if ((is_null($objFlowchartTime->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchartTime on this FlowchartOp with an unsaved FlowchartTime.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`flowchart_time`
				SET
					`flowchart_op_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFlowchartTime->Id) . ' AND
					`flowchart_op_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objFlowchartTime->FlowchartOpId = null;
				$objFlowchartTime->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all FlowchartTimes
		 * @return void
		*/ 
		public function UnassociateAllFlowchartTimes() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchartTime on this unsaved FlowchartOp.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (FlowchartTime::LoadArrayByFlowchartOpId($this->intId) as $objFlowchartTime) {
					$objFlowchartTime->FlowchartOpId = null;
					$objFlowchartTime->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`flowchart_time`
				SET
					`flowchart_op_id` = null
				WHERE
					`flowchart_op_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated FlowchartTime
		 * @param FlowchartTime $objFlowchartTime
		 * @return void
		*/ 
		public function DeleteAssociatedFlowchartTime(FlowchartTime $objFlowchartTime) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchartTime on this unsaved FlowchartOp.');
			if ((is_null($objFlowchartTime->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchartTime on this FlowchartOp with an unsaved FlowchartTime.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart_time`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFlowchartTime->Id) . ' AND
					`flowchart_op_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objFlowchartTime->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated FlowchartTimes
		 * @return void
		*/ 
		public function DeleteAllFlowchartTimes() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchartTime on this unsaved FlowchartOp.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (FlowchartTime::LoadArrayByFlowchartOpId($this->intId) as $objFlowchartTime) {
					$objFlowchartTime->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart_time`
				WHERE
					`flowchart_op_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		// Related Many-to-Many Objects' Methods for Flowchart
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated Flowcharts as an array of Flowchart objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Flowchart[]
		*/ 
		public function GetFlowchartArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Flowchart::LoadArrayByFlowchartOp($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated Flowcharts
		 * @return int
		*/ 
		public function CountFlowcharts() {
			if ((is_null($this->intId)))
				return 0;

			return Flowchart::CountByFlowchartOp($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific Flowchart
		 * @param Flowchart $objFlowchart
		 * @return bool
		*/
		public function IsFlowchartAssociated(Flowchart $objFlowchart) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsFlowchartAssociated on this unsaved FlowchartOp.');
			if ((is_null($objFlowchart->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsFlowchartAssociated on this FlowchartOp with an unsaved Flowchart.');

			$intRowCount = FlowchartOp::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::FlowchartOp()->Id, $this->intId),
					QQ::Equal(QQN::FlowchartOp()->Flowchart->FlowchartId, $objFlowchart->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Journals the Flowchart relationship into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function JournalFlowchartAssociation($intAssociatedId, $strJournalCommand) {
			$objDatabase = FlowchartOp::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `flowchart_op_assn` (
					`flowchart_op_id`,
					`flowchart_id`,
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
		 * Gets the historical journal for an object's Flowchart relationship from the log database.
		 * @param integer intId
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalFlowchartAssociationForId($intId) {
			$objDatabase = FlowchartOp::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM flowchart_op_assn WHERE flowchart_op_id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's Flowchart relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalFlowchartAssociation() {
			return FlowchartOp::GetJournalFlowchartAssociationForId($this->intId);
		}

		/**
		 * Associates a Flowchart
		 * @param Flowchart $objFlowchart
		 * @return void
		*/ 
		public function AssociateFlowchart(Flowchart $objFlowchart) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFlowchart on this unsaved FlowchartOp.');
			if ((is_null($objFlowchart->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFlowchart on this FlowchartOp with an unsaved Flowchart.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `flowchart_op_assn` (
					`flowchart_op_id`,
					`flowchart_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objFlowchart->Id) . '
				)
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalFlowchartAssociation($objFlowchart->Id, 'INSERT');
		}

		/**
		 * Unassociates a Flowchart
		 * @param Flowchart $objFlowchart
		 * @return void
		*/ 
		public function UnassociateFlowchart(Flowchart $objFlowchart) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchart on this unsaved FlowchartOp.');
			if ((is_null($objFlowchart->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchart on this FlowchartOp with an unsaved Flowchart.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart_op_assn`
				WHERE
					`flowchart_op_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`flowchart_id` = ' . $objDatabase->SqlVariable($objFlowchart->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalFlowchartAssociation($objFlowchart->Id, 'DELETE');
		}

		/**
		 * Unassociates all Flowcharts
		 * @return void
		*/ 
		public function UnassociateAllFlowcharts() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllFlowchartArray on this unsaved FlowchartOp.');

			// Get the Database Object for this Class
			$objDatabase = FlowchartOp::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `flowchart_id` AS associated_id FROM `flowchart_op_assn` WHERE `flowchart_op_id` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalFlowchartAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart_op_assn`
				WHERE
					`flowchart_op_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="FlowchartOp"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="ProductionOrder" type="xsd:string"/>';
			$strToReturn .= '<element name="Package" type="xsd1:Package"/>';
			$strToReturn .= '<element name="Date" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('FlowchartOp', $strComplexTypeArray)) {
				$strComplexTypeArray['FlowchartOp'] = FlowchartOp::GetSoapComplexTypeXml();
				Package::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, FlowchartOp::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new FlowchartOp();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'ProductionOrder'))
				$objToReturn->strProductionOrder = $objSoapObject->ProductionOrder;
			if ((property_exists($objSoapObject, 'Package')) &&
				($objSoapObject->Package))
				$objToReturn->Package = Package::GetObjectFromSoapObject($objSoapObject->Package);
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->strDate = $objSoapObject->Date;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, FlowchartOp::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objPackage)
				$objObject->objPackage = Package::GetSoapObjectFromObject($objObject->objPackage, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPackageId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $FlowchartId
	 * @property-read QQNodeFlowchart $Flowchart
	 * @property-read QQNodeFlowchart $_ChildTableNode
	 */
	class QQNodeFlowchartOpFlowchart extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'flowchart';

		protected $strTableName = 'flowchart_op_assn';
		protected $strPrimaryKey = 'flowchart_op_id';
		protected $strClassName = 'Flowchart';

		public function __get($strName) {
			switch ($strName) {
				case 'FlowchartId':
					return new QQNode('flowchart_id', 'FlowchartId', 'integer', $this);
				case 'Flowchart':
					return new QQNodeFlowchart('flowchart_id', 'FlowchartId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeFlowchart('flowchart_id', 'FlowchartId', 'integer', $this);
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
	 * @property-read QQNode $ProductionOrder
	 * @property-read QQNode $PackageId
	 * @property-read QQNodePackage $Package
	 * @property-read QQNode $Date
	 * @property-read QQNodeFlowchartOpFlowchart $Flowchart
	 * @property-read QQReverseReferenceNodeFlowchartGrid $FlowchartGrid
	 * @property-read QQReverseReferenceNodeFlowchartTime $FlowchartTime
	 */
	class QQNodeFlowchartOp extends QQNode {
		protected $strTableName = 'flowchart_op';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FlowchartOp';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'ProductionOrder':
					return new QQNode('production_order', 'ProductionOrder', 'string', $this);
				case 'PackageId':
					return new QQNode('package_id', 'PackageId', 'integer', $this);
				case 'Package':
					return new QQNodePackage('package_id', 'Package', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'string', $this);
				case 'Flowchart':
					return new QQNodeFlowchartOpFlowchart($this);
				case 'FlowchartGrid':
					return new QQReverseReferenceNodeFlowchartGrid($this, 'flowchartgrid', 'reverse_reference', 'flowchart_op_id');
				case 'FlowchartTime':
					return new QQReverseReferenceNodeFlowchartTime($this, 'flowcharttime', 'reverse_reference', 'flowchart_op_id');

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
	 * @property-read QQNode $ProductionOrder
	 * @property-read QQNode $PackageId
	 * @property-read QQNodePackage $Package
	 * @property-read QQNode $Date
	 * @property-read QQNodeFlowchartOpFlowchart $Flowchart
	 * @property-read QQReverseReferenceNodeFlowchartGrid $FlowchartGrid
	 * @property-read QQReverseReferenceNodeFlowchartTime $FlowchartTime
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeFlowchartOp extends QQReverseReferenceNode {
		protected $strTableName = 'flowchart_op';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FlowchartOp';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'ProductionOrder':
					return new QQNode('production_order', 'ProductionOrder', 'string', $this);
				case 'PackageId':
					return new QQNode('package_id', 'PackageId', 'integer', $this);
				case 'Package':
					return new QQNodePackage('package_id', 'Package', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'string', $this);
				case 'Flowchart':
					return new QQNodeFlowchartOpFlowchart($this);
				case 'FlowchartGrid':
					return new QQReverseReferenceNodeFlowchartGrid($this, 'flowchartgrid', 'reverse_reference', 'flowchart_op_id');
				case 'FlowchartTime':
					return new QQReverseReferenceNodeFlowchartTime($this, 'flowcharttime', 'reverse_reference', 'flowchart_op_id');

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