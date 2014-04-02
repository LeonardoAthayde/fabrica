<?php
	/**
	 * The abstract ReferenceGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Reference subclass which
	 * extends this ReferenceGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Reference class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Name the value for strName (Unique)
	 * @property integer $ReferenceCategoryId the value for intReferenceCategoryId (Not Null)
	 * @property string $Model the value for strModel (Not Null)
	 * @property integer $TissueId the value for intTissueId 
	 * @property ReferenceCategory $ReferenceCategory the value for the ReferenceCategory object referenced by intReferenceCategoryId (Not Null)
	 * @property Tissue $Tissue the value for the Tissue object referenced by intTissueId 
	 * @property Flowchart $_Flowchart the value for the private _objFlowchart (Read-Only) if set due to an expansion on the flowchart.reference_id reverse relationship
	 * @property Flowchart[] $_FlowchartArray the value for the private _objFlowchartArray (Read-Only) if set due to an ExpandAsArray on the flowchart.reference_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ReferenceGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column reference.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column reference.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 8;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column reference.reference_category_id
		 * @var integer intReferenceCategoryId
		 */
		protected $intReferenceCategoryId;
		const ReferenceCategoryIdDefault = null;


		/**
		 * Protected member variable that maps to the database column reference.model
		 * @var string strModel
		 */
		protected $strModel;
		const ModelMaxLength = 3;
		const ModelDefault = null;


		/**
		 * Protected member variable that maps to the database column reference.tissue_id
		 * @var integer intTissueId
		 */
		protected $intTissueId;
		const TissueIdDefault = null;


		/**
		 * Private member variable that stores a reference to a single Flowchart object
		 * (of type Flowchart), if this Reference object was restored with
		 * an expansion on the flowchart association table.
		 * @var Flowchart _objFlowchart;
		 */
		private $_objFlowchart;

		/**
		 * Private member variable that stores a reference to an array of Flowchart objects
		 * (of type Flowchart[]), if this Reference object was restored with
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
		 * in the database column reference.reference_category_id.
		 *
		 * NOTE: Always use the ReferenceCategory property getter to correctly retrieve this ReferenceCategory object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var ReferenceCategory objReferenceCategory
		 */
		protected $objReferenceCategory;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column reference.tissue_id.
		 *
		 * NOTE: Always use the Tissue property getter to correctly retrieve this Tissue object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Tissue objTissue
		 */
		protected $objTissue;





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
		 * Load a Reference from PK Info
		 * @param integer $intId
		 * @return Reference
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Reference::QuerySingle(
				QQ::Equal(QQN::Reference()->Id, $intId)
			);
		}

		/**
		 * Load all References
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Reference[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Reference::QueryArray to perform the LoadAll query
			try {
				return Reference::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all References
		 * @return int
		 */
		public static function CountAll() {
			// Call Reference::QueryCount to perform the CountAll query
			return Reference::QueryCount(QQ::All());
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
			$objDatabase = Reference::GetDatabase();

			// Create/Build out the QueryBuilder object with Reference-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'reference');
			Reference::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('reference');

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
		 * Static Qcodo Query method to query for a single Reference object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Reference the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Reference::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Reference object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Reference::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Reference::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Reference objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Reference[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Reference::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Reference::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Reference::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Reference objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Reference::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Reference::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'reference_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Reference-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Reference::GetSelectFields($objQueryBuilder);
				Reference::GetFromFields($objQueryBuilder);

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
			return Reference::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Reference
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'reference';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			$objBuilder->AddSelectItem($strTableName, 'reference_category_id', $strAliasPrefix . 'reference_category_id');
			$objBuilder->AddSelectItem($strTableName, 'model', $strAliasPrefix . 'model');
			$objBuilder->AddSelectItem($strTableName, 'tissue_id', $strAliasPrefix . 'tissue_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Reference from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Reference::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Reference
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
					$strAliasPrefix = 'reference__';


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
				else if ($strAliasPrefix == 'reference__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Reference object
			$objToReturn = new Reference();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'reference_category_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'reference_category_id'] : $strAliasPrefix . 'reference_category_id';
			$objToReturn->intReferenceCategoryId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'model', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'model'] : $strAliasPrefix . 'model';
			$objToReturn->strModel = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'tissue_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tissue_id'] : $strAliasPrefix . 'tissue_id';
			$objToReturn->intTissueId = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'reference__';

			// Check for ReferenceCategory Early Binding
			$strAlias = $strAliasPrefix . 'reference_category_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objReferenceCategory = ReferenceCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'reference_category_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Tissue Early Binding
			$strAlias = $strAliasPrefix . 'tissue_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTissue = Tissue::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tissue_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




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
		 * Instantiate an array of References from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Reference[]
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
					$objItem = Reference::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Reference::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Reference object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Reference next row resulting from the query
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
			return Reference::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Reference object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Reference
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Reference::QuerySingle(
				QQ::Equal(QQN::Reference()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load a single Reference object,
		 * by Name Index(es)
		 * @param string $strName
		 * @return Reference
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return Reference::QuerySingle(
				QQ::Equal(QQN::Reference()->Name, $strName)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Reference objects,
		 * by TissueId Index(es)
		 * @param integer $intTissueId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Reference[]
		*/
		public static function LoadArrayByTissueId($intTissueId, $objOptionalClauses = null) {
			// Call Reference::QueryArray to perform the LoadArrayByTissueId query
			try {
				return Reference::QueryArray(
					QQ::Equal(QQN::Reference()->TissueId, $intTissueId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count References
		 * by TissueId Index(es)
		 * @param integer $intTissueId
		 * @return int
		*/
		public static function CountByTissueId($intTissueId, $objOptionalClauses = null) {
			// Call Reference::QueryCount to perform the CountByTissueId query
			return Reference::QueryCount(
				QQ::Equal(QQN::Reference()->TissueId, $intTissueId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Reference objects,
		 * by ReferenceCategoryId Index(es)
		 * @param integer $intReferenceCategoryId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Reference[]
		*/
		public static function LoadArrayByReferenceCategoryId($intReferenceCategoryId, $objOptionalClauses = null) {
			// Call Reference::QueryArray to perform the LoadArrayByReferenceCategoryId query
			try {
				return Reference::QueryArray(
					QQ::Equal(QQN::Reference()->ReferenceCategoryId, $intReferenceCategoryId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count References
		 * by ReferenceCategoryId Index(es)
		 * @param integer $intReferenceCategoryId
		 * @return int
		*/
		public static function CountByReferenceCategoryId($intReferenceCategoryId, $objOptionalClauses = null) {
			// Call Reference::QueryCount to perform the CountByReferenceCategoryId query
			return Reference::QueryCount(
				QQ::Equal(QQN::Reference()->ReferenceCategoryId, $intReferenceCategoryId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Reference objects,
		 * by ReferenceCategoryId, Model Index(es)
		 * @param integer $intReferenceCategoryId
		 * @param string $strModel
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Reference[]
		*/
		public static function LoadArrayByReferenceCategoryIdModel($intReferenceCategoryId, $strModel, $objOptionalClauses = null) {
			// Call Reference::QueryArray to perform the LoadArrayByReferenceCategoryIdModel query
			try {
				return Reference::QueryArray(
					QQ::AndCondition(
					QQ::Equal(QQN::Reference()->ReferenceCategoryId, $intReferenceCategoryId),
					QQ::Equal(QQN::Reference()->Model, $strModel)
					),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count References
		 * by ReferenceCategoryId, Model Index(es)
		 * @param integer $intReferenceCategoryId
		 * @param string $strModel
		 * @return int
		*/
		public static function CountByReferenceCategoryIdModel($intReferenceCategoryId, $strModel, $objOptionalClauses = null) {
			// Call Reference::QueryCount to perform the CountByReferenceCategoryIdModel query
			return Reference::QueryCount(
				QQ::AndCondition(
				QQ::Equal(QQN::Reference()->ReferenceCategoryId, $intReferenceCategoryId),
				QQ::Equal(QQN::Reference()->Model, $strModel)
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
		 * Save this Reference
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Reference::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `reference` (
							`name`,
							`reference_category_id`,
							`model`,
							`tissue_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->intReferenceCategoryId) . ',
							' . $objDatabase->SqlVariable($this->strModel) . ',
							' . $objDatabase->SqlVariable($this->intTissueId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('reference', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`reference`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`reference_category_id` = ' . $objDatabase->SqlVariable($this->intReferenceCategoryId) . ',
							`model` = ' . $objDatabase->SqlVariable($this->strModel) . ',
							`tissue_id` = ' . $objDatabase->SqlVariable($this->intTissueId) . '
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
		 * Delete this Reference
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Reference with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Reference::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`reference`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all References
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Reference::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`reference`');
		}

		/**
		 * Truncate reference table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Reference::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `reference`');
		}

		/**
		 * Reload this Reference from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Reference object.');

			// Reload the Object
			$objReloaded = Reference::Load($this->intId);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->ReferenceCategoryId = $objReloaded->ReferenceCategoryId;
			$this->strModel = $objReloaded->strModel;
			$this->TissueId = $objReloaded->TissueId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Reference::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `reference` (
					`id`,
					`name`,
					`reference_category_id`,
					`model`,
					`tissue_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strName) . ',
					' . $objDatabase->SqlVariable($this->intReferenceCategoryId) . ',
					' . $objDatabase->SqlVariable($this->strModel) . ',
					' . $objDatabase->SqlVariable($this->intTissueId) . ',
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
		 * @return Reference[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Reference::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM reference WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Reference::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Reference[]
		 */
		public function GetJournal() {
			return Reference::GetJournalForId($this->intId);
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
					// Gets the value for strName (Unique)
					// @return string
					return $this->strName;

				case 'ReferenceCategoryId':
					// Gets the value for intReferenceCategoryId (Not Null)
					// @return integer
					return $this->intReferenceCategoryId;

				case 'Model':
					// Gets the value for strModel (Not Null)
					// @return string
					return $this->strModel;

				case 'TissueId':
					// Gets the value for intTissueId 
					// @return integer
					return $this->intTissueId;


				///////////////////
				// Member Objects
				///////////////////
				case 'ReferenceCategory':
					// Gets the value for the ReferenceCategory object referenced by intReferenceCategoryId (Not Null)
					// @return ReferenceCategory
					try {
						if ((!$this->objReferenceCategory) && (!is_null($this->intReferenceCategoryId)))
							$this->objReferenceCategory = ReferenceCategory::Load($this->intReferenceCategoryId);
						return $this->objReferenceCategory;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Tissue':
					// Gets the value for the Tissue object referenced by intTissueId 
					// @return Tissue
					try {
						if ((!$this->objTissue) && (!is_null($this->intTissueId)))
							$this->objTissue = Tissue::Load($this->intTissueId);
						return $this->objTissue;
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
					// if set due to an expansion on the flowchart.reference_id reverse relationship
					// @return Flowchart
					return $this->_objFlowchart;

				case '_FlowchartArray':
					// Gets the value for the private _objFlowchartArray (Read-Only)
					// if set due to an ExpandAsArray on the flowchart.reference_id reverse relationship
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
					// Sets the value for strName (Unique)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReferenceCategoryId':
					// Sets the value for intReferenceCategoryId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objReferenceCategory = null;
						return ($this->intReferenceCategoryId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Model':
					// Sets the value for strModel (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strModel = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TissueId':
					// Sets the value for intTissueId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objTissue = null;
						return ($this->intTissueId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'ReferenceCategory':
					// Sets the value for the ReferenceCategory object referenced by intReferenceCategoryId (Not Null)
					// @param ReferenceCategory $mixValue
					// @return ReferenceCategory
					if (is_null($mixValue)) {
						$this->intReferenceCategoryId = null;
						$this->objReferenceCategory = null;
						return null;
					} else {
						// Make sure $mixValue actually is a ReferenceCategory object
						try {
							$mixValue = QType::Cast($mixValue, 'ReferenceCategory');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED ReferenceCategory object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved ReferenceCategory for this Reference');

						// Update Local Member Variables
						$this->objReferenceCategory = $mixValue;
						$this->intReferenceCategoryId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Tissue':
					// Sets the value for the Tissue object referenced by intTissueId 
					// @param Tissue $mixValue
					// @return Tissue
					if (is_null($mixValue)) {
						$this->intTissueId = null;
						$this->objTissue = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Tissue object
						try {
							$mixValue = QType::Cast($mixValue, 'Tissue');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Tissue object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Tissue for this Reference');

						// Update Local Member Variables
						$this->objTissue = $mixValue;
						$this->intTissueId = $mixValue->Id;

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
				return Flowchart::LoadArrayByReferenceId($this->intId, $objOptionalClauses);
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

			return Flowchart::CountByReferenceId($this->intId);
		}

		/**
		 * Associates a Flowchart
		 * @param Flowchart $objFlowchart
		 * @return void
		*/ 
		public function AssociateFlowchart(Flowchart $objFlowchart) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFlowchart on this unsaved Reference.');
			if ((is_null($objFlowchart->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFlowchart on this Reference with an unsaved Flowchart.');

			// Get the Database Object for this Class
			$objDatabase = Reference::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`flowchart`
				SET
					`reference_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFlowchart->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objFlowchart->ReferenceId = $this->intId;
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchart on this unsaved Reference.');
			if ((is_null($objFlowchart->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchart on this Reference with an unsaved Flowchart.');

			// Get the Database Object for this Class
			$objDatabase = Reference::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`flowchart`
				SET
					`reference_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFlowchart->Id) . ' AND
					`reference_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objFlowchart->ReferenceId = null;
				$objFlowchart->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all Flowcharts
		 * @return void
		*/ 
		public function UnassociateAllFlowcharts() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchart on this unsaved Reference.');

			// Get the Database Object for this Class
			$objDatabase = Reference::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Flowchart::LoadArrayByReferenceId($this->intId) as $objFlowchart) {
					$objFlowchart->ReferenceId = null;
					$objFlowchart->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`flowchart`
				SET
					`reference_id` = null
				WHERE
					`reference_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated Flowchart
		 * @param Flowchart $objFlowchart
		 * @return void
		*/ 
		public function DeleteAssociatedFlowchart(Flowchart $objFlowchart) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchart on this unsaved Reference.');
			if ((is_null($objFlowchart->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchart on this Reference with an unsaved Flowchart.');

			// Get the Database Object for this Class
			$objDatabase = Reference::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objFlowchart->Id) . ' AND
					`reference_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFlowchart on this unsaved Reference.');

			// Get the Database Object for this Class
			$objDatabase = Reference::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Flowchart::LoadArrayByReferenceId($this->intId) as $objFlowchart) {
					$objFlowchart->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`flowchart`
				WHERE
					`reference_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Reference"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="ReferenceCategory" type="xsd1:ReferenceCategory"/>';
			$strToReturn .= '<element name="Model" type="xsd:string"/>';
			$strToReturn .= '<element name="Tissue" type="xsd1:Tissue"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Reference', $strComplexTypeArray)) {
				$strComplexTypeArray['Reference'] = Reference::GetSoapComplexTypeXml();
				ReferenceCategory::AlterSoapComplexTypeArray($strComplexTypeArray);
				Tissue::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Reference::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Reference();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if ((property_exists($objSoapObject, 'ReferenceCategory')) &&
				($objSoapObject->ReferenceCategory))
				$objToReturn->ReferenceCategory = ReferenceCategory::GetObjectFromSoapObject($objSoapObject->ReferenceCategory);
			if (property_exists($objSoapObject, 'Model'))
				$objToReturn->strModel = $objSoapObject->Model;
			if ((property_exists($objSoapObject, 'Tissue')) &&
				($objSoapObject->Tissue))
				$objToReturn->Tissue = Tissue::GetObjectFromSoapObject($objSoapObject->Tissue);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Reference::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objReferenceCategory)
				$objObject->objReferenceCategory = ReferenceCategory::GetSoapObjectFromObject($objObject->objReferenceCategory, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intReferenceCategoryId = null;
			if ($objObject->objTissue)
				$objObject->objTissue = Tissue::GetSoapObjectFromObject($objObject->objTissue, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTissueId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $Name
	 * @property-read QQNode $ReferenceCategoryId
	 * @property-read QQNodeReferenceCategory $ReferenceCategory
	 * @property-read QQNode $Model
	 * @property-read QQNode $TissueId
	 * @property-read QQNodeTissue $Tissue
	 * @property-read QQReverseReferenceNodeFlowchart $Flowchart
	 */
	class QQNodeReference extends QQNode {
		protected $strTableName = 'reference';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Reference';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'ReferenceCategoryId':
					return new QQNode('reference_category_id', 'ReferenceCategoryId', 'integer', $this);
				case 'ReferenceCategory':
					return new QQNodeReferenceCategory('reference_category_id', 'ReferenceCategory', 'integer', $this);
				case 'Model':
					return new QQNode('model', 'Model', 'string', $this);
				case 'TissueId':
					return new QQNode('tissue_id', 'TissueId', 'integer', $this);
				case 'Tissue':
					return new QQNodeTissue('tissue_id', 'Tissue', 'integer', $this);
				case 'Flowchart':
					return new QQReverseReferenceNodeFlowchart($this, 'flowchart', 'reverse_reference', 'reference_id');

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
	 * @property-read QQNode $ReferenceCategoryId
	 * @property-read QQNodeReferenceCategory $ReferenceCategory
	 * @property-read QQNode $Model
	 * @property-read QQNode $TissueId
	 * @property-read QQNodeTissue $Tissue
	 * @property-read QQReverseReferenceNodeFlowchart $Flowchart
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeReference extends QQReverseReferenceNode {
		protected $strTableName = 'reference';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Reference';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'ReferenceCategoryId':
					return new QQNode('reference_category_id', 'ReferenceCategoryId', 'integer', $this);
				case 'ReferenceCategory':
					return new QQNodeReferenceCategory('reference_category_id', 'ReferenceCategory', 'integer', $this);
				case 'Model':
					return new QQNode('model', 'Model', 'string', $this);
				case 'TissueId':
					return new QQNode('tissue_id', 'TissueId', 'integer', $this);
				case 'Tissue':
					return new QQNodeTissue('tissue_id', 'Tissue', 'integer', $this);
				case 'Flowchart':
					return new QQReverseReferenceNodeFlowchart($this, 'flowchart', 'reverse_reference', 'reference_id');

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