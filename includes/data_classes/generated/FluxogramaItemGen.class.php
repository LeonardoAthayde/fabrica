<?php
	/**
	 * The abstract FluxogramaItemGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the FluxogramaItem subclass which
	 * extends this FluxogramaItemGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the FluxogramaItem class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $ReferenciaId the value for intReferenciaId (Not Null)
	 * @property integer $CorId the value for intCorId 
	 * @property integer $FluxogramaAcoesId the value for intFluxogramaAcoesId 
	 * @property integer $FluxogramaAcoesTempoId the value for intFluxogramaAcoesTempoId 
	 * @property integer $Profundidade the value for intProfundidade (Not Null)
	 * @property Referencia $Referencia the value for the Referencia object referenced by intReferenciaId (Not Null)
	 * @property Cor $Cor the value for the Cor object referenced by intCorId 
	 * @property FluxogramaAcoes $FluxogramaAcoes the value for the FluxogramaAcoes object referenced by intFluxogramaAcoesId 
	 * @property FluxogramaAcoesTempo $FluxogramaAcoesTempo the value for the FluxogramaAcoesTempo object referenced by intFluxogramaAcoesTempoId 
	 * @property FluxogramaItem $_ParentFluxogramaItemAsFluxogramaDepedencia the value for the private _objParentFluxogramaItemAsFluxogramaDepedencia (Read-Only) if set due to an expansion on the fluxograma_depedencia_assn association table
	 * @property FluxogramaItem[] $_ParentFluxogramaItemAsFluxogramaDepedenciaArray the value for the private _objParentFluxogramaItemAsFluxogramaDepedenciaArray (Read-Only) if set due to an ExpandAsArray on the fluxograma_depedencia_assn association table
	 * @property FluxogramaItem $_FluxogramaItemAsFluxogramaDepedencia the value for the private _objFluxogramaItemAsFluxogramaDepedencia (Read-Only) if set due to an expansion on the fluxograma_depedencia_assn association table
	 * @property FluxogramaItem[] $_FluxogramaItemAsFluxogramaDepedenciaArray the value for the private _objFluxogramaItemAsFluxogramaDepedenciaArray (Read-Only) if set due to an ExpandAsArray on the fluxograma_depedencia_assn association table
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FluxogramaItemGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column fluxograma_item.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item.referencia_id
		 * @var integer intReferenciaId
		 */
		protected $intReferenciaId;
		const ReferenciaIdDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item.cor_id
		 * @var integer intCorId
		 */
		protected $intCorId;
		const CorIdDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item.fluxograma_acoes_id
		 * @var integer intFluxogramaAcoesId
		 */
		protected $intFluxogramaAcoesId;
		const FluxogramaAcoesIdDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item.fluxograma_acoes_tempo_id
		 * @var integer intFluxogramaAcoesTempoId
		 */
		protected $intFluxogramaAcoesTempoId;
		const FluxogramaAcoesTempoIdDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item.profundidade
		 * @var integer intProfundidade
		 */
		protected $intProfundidade;
		const ProfundidadeDefault = null;


		/**
		 * Private member variable that stores a reference to a single ParentFluxogramaItemAsFluxogramaDepedencia object
		 * (of type FluxogramaItem), if this FluxogramaItem object was restored with
		 * an expansion on the fluxograma_depedencia_assn association table.
		 * @var FluxogramaItem _objParentFluxogramaItemAsFluxogramaDepedencia;
		 */
		private $_objParentFluxogramaItemAsFluxogramaDepedencia;

		/**
		 * Private member variable that stores a reference to an array of ParentFluxogramaItemAsFluxogramaDepedencia objects
		 * (of type FluxogramaItem[]), if this FluxogramaItem object was restored with
		 * an ExpandAsArray on the fluxograma_depedencia_assn association table.
		 * @var FluxogramaItem[] _objParentFluxogramaItemAsFluxogramaDepedenciaArray;
		 */
		private $_objParentFluxogramaItemAsFluxogramaDepedenciaArray = array();

		/**
		 * Private member variable that stores a reference to a single FluxogramaItemAsFluxogramaDepedencia object
		 * (of type FluxogramaItem), if this FluxogramaItem object was restored with
		 * an expansion on the fluxograma_depedencia_assn association table.
		 * @var FluxogramaItem _objFluxogramaItemAsFluxogramaDepedencia;
		 */
		private $_objFluxogramaItemAsFluxogramaDepedencia;

		/**
		 * Private member variable that stores a reference to an array of FluxogramaItemAsFluxogramaDepedencia objects
		 * (of type FluxogramaItem[]), if this FluxogramaItem object was restored with
		 * an ExpandAsArray on the fluxograma_depedencia_assn association table.
		 * @var FluxogramaItem[] _objFluxogramaItemAsFluxogramaDepedenciaArray;
		 */
		private $_objFluxogramaItemAsFluxogramaDepedenciaArray = array();

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
		 * in the database column fluxograma_item.referencia_id.
		 *
		 * NOTE: Always use the Referencia property getter to correctly retrieve this Referencia object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Referencia objReferencia
		 */
		protected $objReferencia;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fluxograma_item.cor_id.
		 *
		 * NOTE: Always use the Cor property getter to correctly retrieve this Cor object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Cor objCor
		 */
		protected $objCor;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fluxograma_item.fluxograma_acoes_id.
		 *
		 * NOTE: Always use the FluxogramaAcoes property getter to correctly retrieve this FluxogramaAcoes object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var FluxogramaAcoes objFluxogramaAcoes
		 */
		protected $objFluxogramaAcoes;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fluxograma_item.fluxograma_acoes_tempo_id.
		 *
		 * NOTE: Always use the FluxogramaAcoesTempo property getter to correctly retrieve this FluxogramaAcoesTempo object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var FluxogramaAcoesTempo objFluxogramaAcoesTempo
		 */
		protected $objFluxogramaAcoesTempo;





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
		 * Load a FluxogramaItem from PK Info
		 * @param integer $intId
		 * @return FluxogramaItem
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return FluxogramaItem::QuerySingle(
				QQ::Equal(QQN::FluxogramaItem()->Id, $intId)
			);
		}

		/**
		 * Load all FluxogramaItems
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call FluxogramaItem::QueryArray to perform the LoadAll query
			try {
				return FluxogramaItem::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all FluxogramaItems
		 * @return int
		 */
		public static function CountAll() {
			// Call FluxogramaItem::QueryCount to perform the CountAll query
			return FluxogramaItem::QueryCount(QQ::All());
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
			$objDatabase = FluxogramaItem::GetDatabase();

			// Create/Build out the QueryBuilder object with FluxogramaItem-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'fluxograma_item');
			FluxogramaItem::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('fluxograma_item');

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
		 * Static Qcodo Query method to query for a single FluxogramaItem object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FluxogramaItem the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FluxogramaItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new FluxogramaItem object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FluxogramaItem::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return FluxogramaItem::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of FluxogramaItem objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FluxogramaItem[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FluxogramaItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return FluxogramaItem::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = FluxogramaItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of FluxogramaItem objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FluxogramaItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = FluxogramaItem::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'fluxograma_item_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with FluxogramaItem-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				FluxogramaItem::GetSelectFields($objQueryBuilder);
				FluxogramaItem::GetFromFields($objQueryBuilder);

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
			return FluxogramaItem::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this FluxogramaItem
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'fluxograma_item';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'referencia_id', $strAliasPrefix . 'referencia_id');
			$objBuilder->AddSelectItem($strTableName, 'cor_id', $strAliasPrefix . 'cor_id');
			$objBuilder->AddSelectItem($strTableName, 'fluxograma_acoes_id', $strAliasPrefix . 'fluxograma_acoes_id');
			$objBuilder->AddSelectItem($strTableName, 'fluxograma_acoes_tempo_id', $strAliasPrefix . 'fluxograma_acoes_tempo_id');
			$objBuilder->AddSelectItem($strTableName, 'profundidade', $strAliasPrefix . 'profundidade');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a FluxogramaItem from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this FluxogramaItem::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return FluxogramaItem
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
					$strAliasPrefix = 'fluxograma_item__';

				$strAlias = $strAliasPrefix . 'parentfluxogramaitemasfluxogramadepedencia__filho__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objParentFluxogramaItemAsFluxogramaDepedenciaArray)) {
						$objPreviousChildItem = $objPreviousItem->_objParentFluxogramaItemAsFluxogramaDepedenciaArray[$intPreviousChildItemCount - 1];
						$objChildItem = FluxogramaItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentfluxogramaitemasfluxogramadepedencia__filho__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objParentFluxogramaItemAsFluxogramaDepedenciaArray[] = $objChildItem;
					} else
						$objPreviousItem->_objParentFluxogramaItemAsFluxogramaDepedenciaArray[] = FluxogramaItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentfluxogramaitemasfluxogramadepedencia__filho__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'fluxogramaitemasfluxogramadepedencia__pai__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objFluxogramaItemAsFluxogramaDepedenciaArray)) {
						$objPreviousChildItem = $objPreviousItem->_objFluxogramaItemAsFluxogramaDepedenciaArray[$intPreviousChildItemCount - 1];
						$objChildItem = FluxogramaItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxogramaitemasfluxogramadepedencia__pai__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objFluxogramaItemAsFluxogramaDepedenciaArray[] = $objChildItem;
					} else
						$objPreviousItem->_objFluxogramaItemAsFluxogramaDepedenciaArray[] = FluxogramaItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxogramaitemasfluxogramadepedencia__pai__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}


				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'fluxograma_item__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the FluxogramaItem object
			$objToReturn = new FluxogramaItem();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'referencia_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'referencia_id'] : $strAliasPrefix . 'referencia_id';
			$objToReturn->intReferenciaId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'cor_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'cor_id'] : $strAliasPrefix . 'cor_id';
			$objToReturn->intCorId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fluxograma_acoes_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fluxograma_acoes_id'] : $strAliasPrefix . 'fluxograma_acoes_id';
			$objToReturn->intFluxogramaAcoesId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fluxograma_acoes_tempo_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fluxograma_acoes_tempo_id'] : $strAliasPrefix . 'fluxograma_acoes_tempo_id';
			$objToReturn->intFluxogramaAcoesTempoId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'profundidade', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'profundidade'] : $strAliasPrefix . 'profundidade';
			$objToReturn->intProfundidade = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'fluxograma_item__';

			// Check for Referencia Early Binding
			$strAlias = $strAliasPrefix . 'referencia_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objReferencia = Referencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referencia_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Cor Early Binding
			$strAlias = $strAliasPrefix . 'cor_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCor = Cor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'cor_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FluxogramaAcoes Early Binding
			$strAlias = $strAliasPrefix . 'fluxograma_acoes_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFluxogramaAcoes = FluxogramaAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxograma_acoes_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FluxogramaAcoesTempo Early Binding
			$strAlias = $strAliasPrefix . 'fluxograma_acoes_tempo_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFluxogramaAcoesTempo = FluxogramaAcoesTempo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxograma_acoes_tempo_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);



			// Check for ParentFluxogramaItemAsFluxogramaDepedencia Virtual Binding
			$strAlias = $strAliasPrefix . 'parentfluxogramaitemasfluxogramadepedencia__filho__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objParentFluxogramaItemAsFluxogramaDepedenciaArray[] = FluxogramaItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentfluxogramaitemasfluxogramadepedencia__filho__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objParentFluxogramaItemAsFluxogramaDepedencia = FluxogramaItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentfluxogramaitemasfluxogramadepedencia__filho__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for FluxogramaItemAsFluxogramaDepedencia Virtual Binding
			$strAlias = $strAliasPrefix . 'fluxogramaitemasfluxogramadepedencia__pai__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFluxogramaItemAsFluxogramaDepedenciaArray[] = FluxogramaItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxogramaitemasfluxogramadepedencia__pai__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFluxogramaItemAsFluxogramaDepedencia = FluxogramaItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxogramaitemasfluxogramadepedencia__pai__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


			return $objToReturn;
		}

		/**
		 * Instantiate an array of FluxogramaItems from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return FluxogramaItem[]
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
					$objItem = FluxogramaItem::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = FluxogramaItem::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single FluxogramaItem object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return FluxogramaItem next row resulting from the query
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
			return FluxogramaItem::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single FluxogramaItem object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return FluxogramaItem
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return FluxogramaItem::QuerySingle(
				QQ::Equal(QQN::FluxogramaItem()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FluxogramaItem objects,
		 * by FluxogramaAcoesId Index(es)
		 * @param integer $intFluxogramaAcoesId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		*/
		public static function LoadArrayByFluxogramaAcoesId($intFluxogramaAcoesId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryArray to perform the LoadArrayByFluxogramaAcoesId query
			try {
				return FluxogramaItem::QueryArray(
					QQ::Equal(QQN::FluxogramaItem()->FluxogramaAcoesId, $intFluxogramaAcoesId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaItems
		 * by FluxogramaAcoesId Index(es)
		 * @param integer $intFluxogramaAcoesId
		 * @return int
		*/
		public static function CountByFluxogramaAcoesId($intFluxogramaAcoesId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryCount to perform the CountByFluxogramaAcoesId query
			return FluxogramaItem::QueryCount(
				QQ::Equal(QQN::FluxogramaItem()->FluxogramaAcoesId, $intFluxogramaAcoesId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FluxogramaItem objects,
		 * by ReferenciaId Index(es)
		 * @param integer $intReferenciaId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		*/
		public static function LoadArrayByReferenciaId($intReferenciaId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryArray to perform the LoadArrayByReferenciaId query
			try {
				return FluxogramaItem::QueryArray(
					QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $intReferenciaId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaItems
		 * by ReferenciaId Index(es)
		 * @param integer $intReferenciaId
		 * @return int
		*/
		public static function CountByReferenciaId($intReferenciaId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryCount to perform the CountByReferenciaId query
			return FluxogramaItem::QueryCount(
				QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $intReferenciaId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FluxogramaItem objects,
		 * by CorId Index(es)
		 * @param integer $intCorId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		*/
		public static function LoadArrayByCorId($intCorId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryArray to perform the LoadArrayByCorId query
			try {
				return FluxogramaItem::QueryArray(
					QQ::Equal(QQN::FluxogramaItem()->CorId, $intCorId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaItems
		 * by CorId Index(es)
		 * @param integer $intCorId
		 * @return int
		*/
		public static function CountByCorId($intCorId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryCount to perform the CountByCorId query
			return FluxogramaItem::QueryCount(
				QQ::Equal(QQN::FluxogramaItem()->CorId, $intCorId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FluxogramaItem objects,
		 * by FluxogramaAcoesTempoId Index(es)
		 * @param integer $intFluxogramaAcoesTempoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		*/
		public static function LoadArrayByFluxogramaAcoesTempoId($intFluxogramaAcoesTempoId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryArray to perform the LoadArrayByFluxogramaAcoesTempoId query
			try {
				return FluxogramaItem::QueryArray(
					QQ::Equal(QQN::FluxogramaItem()->FluxogramaAcoesTempoId, $intFluxogramaAcoesTempoId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaItems
		 * by FluxogramaAcoesTempoId Index(es)
		 * @param integer $intFluxogramaAcoesTempoId
		 * @return int
		*/
		public static function CountByFluxogramaAcoesTempoId($intFluxogramaAcoesTempoId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryCount to perform the CountByFluxogramaAcoesTempoId query
			return FluxogramaItem::QueryCount(
				QQ::Equal(QQN::FluxogramaItem()->FluxogramaAcoesTempoId, $intFluxogramaAcoesTempoId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FluxogramaItem objects,
		 * by ReferenciaId, CorId Index(es)
		 * @param integer $intReferenciaId
		 * @param integer $intCorId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		*/
		public static function LoadArrayByReferenciaIdCorId($intReferenciaId, $intCorId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryArray to perform the LoadArrayByReferenciaIdCorId query
			try {
				return FluxogramaItem::QueryArray(
					QQ::AndCondition(
					QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $intReferenciaId),
					QQ::Equal(QQN::FluxogramaItem()->CorId, $intCorId)
					),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaItems
		 * by ReferenciaId, CorId Index(es)
		 * @param integer $intReferenciaId
		 * @param integer $intCorId
		 * @return int
		*/
		public static function CountByReferenciaIdCorId($intReferenciaId, $intCorId, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryCount to perform the CountByReferenciaIdCorId query
			return FluxogramaItem::QueryCount(
				QQ::AndCondition(
				QQ::Equal(QQN::FluxogramaItem()->ReferenciaId, $intReferenciaId),
				QQ::Equal(QQN::FluxogramaItem()->CorId, $intCorId)
				)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of FluxogramaItem objects for a given ParentFluxogramaItemAsFluxogramaDepedencia
		 * via the fluxograma_depedencia_assn table
		 * @param integer $intFilho
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		*/
		public static function LoadArrayByParentFluxogramaItemAsFluxogramaDepedencia($intFilho, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryArray to perform the LoadArrayByParentFluxogramaItemAsFluxogramaDepedencia query
			try {
				return FluxogramaItem::QueryArray(
					QQ::Equal(QQN::FluxogramaItem()->ParentFluxogramaItemAsFluxogramaDepedencia->Filho, $intFilho),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaItems for a given ParentFluxogramaItemAsFluxogramaDepedencia
		 * via the fluxograma_depedencia_assn table
		 * @param integer $intFilho
		 * @return int
		*/
		public static function CountByParentFluxogramaItemAsFluxogramaDepedencia($intFilho, $objOptionalClauses = null) {
			return FluxogramaItem::QueryCount(
				QQ::Equal(QQN::FluxogramaItem()->ParentFluxogramaItemAsFluxogramaDepedencia->Filho, $intFilho),
				$objOptionalClauses
			);
		}
			/**
		 * Load an array of FluxogramaItem objects for a given FluxogramaItemAsFluxogramaDepedencia
		 * via the fluxograma_depedencia_assn table
		 * @param integer $intPai
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		*/
		public static function LoadArrayByFluxogramaItemAsFluxogramaDepedencia($intPai, $objOptionalClauses = null) {
			// Call FluxogramaItem::QueryArray to perform the LoadArrayByFluxogramaItemAsFluxogramaDepedencia query
			try {
				return FluxogramaItem::QueryArray(
					QQ::Equal(QQN::FluxogramaItem()->FluxogramaItemAsFluxogramaDepedencia->Pai, $intPai),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaItems for a given FluxogramaItemAsFluxogramaDepedencia
		 * via the fluxograma_depedencia_assn table
		 * @param integer $intPai
		 * @return int
		*/
		public static function CountByFluxogramaItemAsFluxogramaDepedencia($intPai, $objOptionalClauses = null) {
			return FluxogramaItem::QueryCount(
				QQ::Equal(QQN::FluxogramaItem()->FluxogramaItemAsFluxogramaDepedencia->Pai, $intPai),
				$objOptionalClauses
			);
		}




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this FluxogramaItem
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `fluxograma_item` (
							`referencia_id`,
							`cor_id`,
							`fluxograma_acoes_id`,
							`fluxograma_acoes_tempo_id`,
							`profundidade`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intReferenciaId) . ',
							' . $objDatabase->SqlVariable($this->intCorId) . ',
							' . $objDatabase->SqlVariable($this->intFluxogramaAcoesId) . ',
							' . $objDatabase->SqlVariable($this->intFluxogramaAcoesTempoId) . ',
							' . $objDatabase->SqlVariable($this->intProfundidade) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('fluxograma_item', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`fluxograma_item`
						SET
							`referencia_id` = ' . $objDatabase->SqlVariable($this->intReferenciaId) . ',
							`cor_id` = ' . $objDatabase->SqlVariable($this->intCorId) . ',
							`fluxograma_acoes_id` = ' . $objDatabase->SqlVariable($this->intFluxogramaAcoesId) . ',
							`fluxograma_acoes_tempo_id` = ' . $objDatabase->SqlVariable($this->intFluxogramaAcoesTempoId) . ',
							`profundidade` = ' . $objDatabase->SqlVariable($this->intProfundidade) . '
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
		 * Delete this FluxogramaItem
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this FluxogramaItem with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_item`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all FluxogramaItems
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_item`');
		}

		/**
		 * Truncate fluxograma_item table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `fluxograma_item`');
		}

		/**
		 * Reload this FluxogramaItem from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved FluxogramaItem object.');

			// Reload the Object
			$objReloaded = FluxogramaItem::Load($this->intId);

			// Update $this's local variables to match
			$this->ReferenciaId = $objReloaded->ReferenciaId;
			$this->CorId = $objReloaded->CorId;
			$this->FluxogramaAcoesId = $objReloaded->FluxogramaAcoesId;
			$this->FluxogramaAcoesTempoId = $objReloaded->FluxogramaAcoesTempoId;
			$this->intProfundidade = $objReloaded->intProfundidade;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = FluxogramaItem::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `fluxograma_item` (
					`id`,
					`referencia_id`,
					`cor_id`,
					`fluxograma_acoes_id`,
					`fluxograma_acoes_tempo_id`,
					`profundidade`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intReferenciaId) . ',
					' . $objDatabase->SqlVariable($this->intCorId) . ',
					' . $objDatabase->SqlVariable($this->intFluxogramaAcoesId) . ',
					' . $objDatabase->SqlVariable($this->intFluxogramaAcoesTempoId) . ',
					' . $objDatabase->SqlVariable($this->intProfundidade) . ',
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
		 * @return FluxogramaItem[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = FluxogramaItem::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM fluxograma_item WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return FluxogramaItem::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return FluxogramaItem[]
		 */
		public function GetJournal() {
			return FluxogramaItem::GetJournalForId($this->intId);
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

				case 'ReferenciaId':
					// Gets the value for intReferenciaId (Not Null)
					// @return integer
					return $this->intReferenciaId;

				case 'CorId':
					// Gets the value for intCorId 
					// @return integer
					return $this->intCorId;

				case 'FluxogramaAcoesId':
					// Gets the value for intFluxogramaAcoesId 
					// @return integer
					return $this->intFluxogramaAcoesId;

				case 'FluxogramaAcoesTempoId':
					// Gets the value for intFluxogramaAcoesTempoId 
					// @return integer
					return $this->intFluxogramaAcoesTempoId;

				case 'Profundidade':
					// Gets the value for intProfundidade (Not Null)
					// @return integer
					return $this->intProfundidade;


				///////////////////
				// Member Objects
				///////////////////
				case 'Referencia':
					// Gets the value for the Referencia object referenced by intReferenciaId (Not Null)
					// @return Referencia
					try {
						if ((!$this->objReferencia) && (!is_null($this->intReferenciaId)))
							$this->objReferencia = Referencia::Load($this->intReferenciaId);
						return $this->objReferencia;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Cor':
					// Gets the value for the Cor object referenced by intCorId 
					// @return Cor
					try {
						if ((!$this->objCor) && (!is_null($this->intCorId)))
							$this->objCor = Cor::Load($this->intCorId);
						return $this->objCor;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FluxogramaAcoes':
					// Gets the value for the FluxogramaAcoes object referenced by intFluxogramaAcoesId 
					// @return FluxogramaAcoes
					try {
						if ((!$this->objFluxogramaAcoes) && (!is_null($this->intFluxogramaAcoesId)))
							$this->objFluxogramaAcoes = FluxogramaAcoes::Load($this->intFluxogramaAcoesId);
						return $this->objFluxogramaAcoes;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FluxogramaAcoesTempo':
					// Gets the value for the FluxogramaAcoesTempo object referenced by intFluxogramaAcoesTempoId 
					// @return FluxogramaAcoesTempo
					try {
						if ((!$this->objFluxogramaAcoesTempo) && (!is_null($this->intFluxogramaAcoesTempoId)))
							$this->objFluxogramaAcoesTempo = FluxogramaAcoesTempo::Load($this->intFluxogramaAcoesTempoId);
						return $this->objFluxogramaAcoesTempo;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_ParentFluxogramaItemAsFluxogramaDepedencia':
					// Gets the value for the private _objParentFluxogramaItemAsFluxogramaDepedencia (Read-Only)
					// if set due to an expansion on the fluxograma_depedencia_assn association table
					// @return FluxogramaItem
					return $this->_objParentFluxogramaItemAsFluxogramaDepedencia;

				case '_ParentFluxogramaItemAsFluxogramaDepedenciaArray':
					// Gets the value for the private _objParentFluxogramaItemAsFluxogramaDepedenciaArray (Read-Only)
					// if set due to an ExpandAsArray on the fluxograma_depedencia_assn association table
					// @return FluxogramaItem[]
					return (array) $this->_objParentFluxogramaItemAsFluxogramaDepedenciaArray;

				case '_FluxogramaItemAsFluxogramaDepedencia':
					// Gets the value for the private _objFluxogramaItemAsFluxogramaDepedencia (Read-Only)
					// if set due to an expansion on the fluxograma_depedencia_assn association table
					// @return FluxogramaItem
					return $this->_objFluxogramaItemAsFluxogramaDepedencia;

				case '_FluxogramaItemAsFluxogramaDepedenciaArray':
					// Gets the value for the private _objFluxogramaItemAsFluxogramaDepedenciaArray (Read-Only)
					// if set due to an ExpandAsArray on the fluxograma_depedencia_assn association table
					// @return FluxogramaItem[]
					return (array) $this->_objFluxogramaItemAsFluxogramaDepedenciaArray;


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
				case 'ReferenciaId':
					// Sets the value for intReferenciaId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objReferencia = null;
						return ($this->intReferenciaId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CorId':
					// Sets the value for intCorId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objCor = null;
						return ($this->intCorId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FluxogramaAcoesId':
					// Sets the value for intFluxogramaAcoesId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objFluxogramaAcoes = null;
						return ($this->intFluxogramaAcoesId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FluxogramaAcoesTempoId':
					// Sets the value for intFluxogramaAcoesTempoId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objFluxogramaAcoesTempo = null;
						return ($this->intFluxogramaAcoesTempoId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Profundidade':
					// Sets the value for intProfundidade (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intProfundidade = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Referencia':
					// Sets the value for the Referencia object referenced by intReferenciaId (Not Null)
					// @param Referencia $mixValue
					// @return Referencia
					if (is_null($mixValue)) {
						$this->intReferenciaId = null;
						$this->objReferencia = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Referencia object
						try {
							$mixValue = QType::Cast($mixValue, 'Referencia');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Referencia object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Referencia for this FluxogramaItem');

						// Update Local Member Variables
						$this->objReferencia = $mixValue;
						$this->intReferenciaId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Cor':
					// Sets the value for the Cor object referenced by intCorId 
					// @param Cor $mixValue
					// @return Cor
					if (is_null($mixValue)) {
						$this->intCorId = null;
						$this->objCor = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Cor object
						try {
							$mixValue = QType::Cast($mixValue, 'Cor');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Cor object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Cor for this FluxogramaItem');

						// Update Local Member Variables
						$this->objCor = $mixValue;
						$this->intCorId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'FluxogramaAcoes':
					// Sets the value for the FluxogramaAcoes object referenced by intFluxogramaAcoesId 
					// @param FluxogramaAcoes $mixValue
					// @return FluxogramaAcoes
					if (is_null($mixValue)) {
						$this->intFluxogramaAcoesId = null;
						$this->objFluxogramaAcoes = null;
						return null;
					} else {
						// Make sure $mixValue actually is a FluxogramaAcoes object
						try {
							$mixValue = QType::Cast($mixValue, 'FluxogramaAcoes');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED FluxogramaAcoes object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved FluxogramaAcoes for this FluxogramaItem');

						// Update Local Member Variables
						$this->objFluxogramaAcoes = $mixValue;
						$this->intFluxogramaAcoesId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'FluxogramaAcoesTempo':
					// Sets the value for the FluxogramaAcoesTempo object referenced by intFluxogramaAcoesTempoId 
					// @param FluxogramaAcoesTempo $mixValue
					// @return FluxogramaAcoesTempo
					if (is_null($mixValue)) {
						$this->intFluxogramaAcoesTempoId = null;
						$this->objFluxogramaAcoesTempo = null;
						return null;
					} else {
						// Make sure $mixValue actually is a FluxogramaAcoesTempo object
						try {
							$mixValue = QType::Cast($mixValue, 'FluxogramaAcoesTempo');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED FluxogramaAcoesTempo object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved FluxogramaAcoesTempo for this FluxogramaItem');

						// Update Local Member Variables
						$this->objFluxogramaAcoesTempo = $mixValue;
						$this->intFluxogramaAcoesTempoId = $mixValue->Id;

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

			
		// Related Many-to-Many Objects' Methods for ParentFluxogramaItemAsFluxogramaDepedencia
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated ParentFluxogramaItemsAsFluxogramaDepedencia as an array of FluxogramaItem objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		*/ 
		public function GetParentFluxogramaItemAsFluxogramaDepedenciaArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FluxogramaItem::LoadArrayByFluxogramaItemAsFluxogramaDepedencia($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated ParentFluxogramaItemsAsFluxogramaDepedencia
		 * @return int
		*/ 
		public function CountParentFluxogramaItemsAsFluxogramaDepedencia() {
			if ((is_null($this->intId)))
				return 0;

			return FluxogramaItem::CountByFluxogramaItemAsFluxogramaDepedencia($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific ParentFluxogramaItemAsFluxogramaDepedencia
		 * @param FluxogramaItem $objFluxogramaItem
		 * @return bool
		*/
		public function IsParentFluxogramaItemAsFluxogramaDepedenciaAssociated(FluxogramaItem $objFluxogramaItem) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsParentFluxogramaItemAsFluxogramaDepedenciaAssociated on this unsaved FluxogramaItem.');
			if ((is_null($objFluxogramaItem->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsParentFluxogramaItemAsFluxogramaDepedenciaAssociated on this FluxogramaItem with an unsaved FluxogramaItem.');

			$intRowCount = FluxogramaItem::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::FluxogramaItem()->Id, $this->intId),
					QQ::Equal(QQN::FluxogramaItem()->ParentFluxogramaItemAsFluxogramaDepedencia->Filho, $objFluxogramaItem->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Journals the ParentFluxogramaItemAsFluxogramaDepedencia relationship into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function JournalParentFluxogramaItemAsFluxogramaDepedenciaAssociation($intAssociatedId, $strJournalCommand) {
			$objDatabase = FluxogramaItem::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `fluxograma_depedencia_assn` (
					`pai`,
					`filho`,
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
		 * Gets the historical journal for an object's ParentFluxogramaItemAsFluxogramaDepedencia relationship from the log database.
		 * @param integer intId
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalParentFluxogramaItemAsFluxogramaDepedenciaAssociationForId($intId) {
			$objDatabase = FluxogramaItem::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM fluxograma_depedencia_assn WHERE pai = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's ParentFluxogramaItemAsFluxogramaDepedencia relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalParentFluxogramaItemAsFluxogramaDepedenciaAssociation() {
			return FluxogramaItem::GetJournalParentFluxogramaItemAsFluxogramaDepedenciaAssociationForId($this->intId);
		}

		/**
		 * Associates a ParentFluxogramaItemAsFluxogramaDepedencia
		 * @param FluxogramaItem $objFluxogramaItem
		 * @return void
		*/ 
		public function AssociateParentFluxogramaItemAsFluxogramaDepedencia(FluxogramaItem $objFluxogramaItem) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateParentFluxogramaItemAsFluxogramaDepedencia on this unsaved FluxogramaItem.');
			if ((is_null($objFluxogramaItem->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateParentFluxogramaItemAsFluxogramaDepedencia on this FluxogramaItem with an unsaved FluxogramaItem.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `fluxograma_depedencia_assn` (
					`pai`,
					`filho`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objFluxogramaItem->Id) . '
				)
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalParentFluxogramaItemAsFluxogramaDepedenciaAssociation($objFluxogramaItem->Id, 'INSERT');
		}

		/**
		 * Unassociates a ParentFluxogramaItemAsFluxogramaDepedencia
		 * @param FluxogramaItem $objFluxogramaItem
		 * @return void
		*/ 
		public function UnassociateParentFluxogramaItemAsFluxogramaDepedencia(FluxogramaItem $objFluxogramaItem) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateParentFluxogramaItemAsFluxogramaDepedencia on this unsaved FluxogramaItem.');
			if ((is_null($objFluxogramaItem->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateParentFluxogramaItemAsFluxogramaDepedencia on this FluxogramaItem with an unsaved FluxogramaItem.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_depedencia_assn`
				WHERE
					`pai` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`filho` = ' . $objDatabase->SqlVariable($objFluxogramaItem->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalParentFluxogramaItemAsFluxogramaDepedenciaAssociation($objFluxogramaItem->Id, 'DELETE');
		}

		/**
		 * Unassociates all ParentFluxogramaItemsAsFluxogramaDepedencia
		 * @return void
		*/ 
		public function UnassociateAllParentFluxogramaItemsAsFluxogramaDepedencia() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllParentFluxogramaItemAsFluxogramaDepedenciaArray on this unsaved FluxogramaItem.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `filho` AS associated_id FROM `fluxograma_depedencia_assn` WHERE `pai` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalParentFluxogramaItemAsFluxogramaDepedenciaAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_depedencia_assn`
				WHERE
					`pai` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}
			
		// Related Many-to-Many Objects' Methods for FluxogramaItemAsFluxogramaDepedencia
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated FluxogramaItemsAsFluxogramaDepedencia as an array of FluxogramaItem objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItem[]
		*/ 
		public function GetFluxogramaItemAsFluxogramaDepedenciaArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FluxogramaItem::LoadArrayByParentFluxogramaItemAsFluxogramaDepedencia($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated FluxogramaItemsAsFluxogramaDepedencia
		 * @return int
		*/ 
		public function CountFluxogramaItemsAsFluxogramaDepedencia() {
			if ((is_null($this->intId)))
				return 0;

			return FluxogramaItem::CountByParentFluxogramaItemAsFluxogramaDepedencia($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific FluxogramaItemAsFluxogramaDepedencia
		 * @param FluxogramaItem $objFluxogramaItem
		 * @return bool
		*/
		public function IsFluxogramaItemAsFluxogramaDepedenciaAssociated(FluxogramaItem $objFluxogramaItem) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsFluxogramaItemAsFluxogramaDepedenciaAssociated on this unsaved FluxogramaItem.');
			if ((is_null($objFluxogramaItem->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsFluxogramaItemAsFluxogramaDepedenciaAssociated on this FluxogramaItem with an unsaved FluxogramaItem.');

			$intRowCount = FluxogramaItem::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::FluxogramaItem()->Id, $this->intId),
					QQ::Equal(QQN::FluxogramaItem()->FluxogramaItemAsFluxogramaDepedencia->Pai, $objFluxogramaItem->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Journals the FluxogramaItemAsFluxogramaDepedencia relationship into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function JournalFluxogramaItemAsFluxogramaDepedenciaAssociation($intAssociatedId, $strJournalCommand) {
			$objDatabase = FluxogramaItem::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `fluxograma_depedencia_assn` (
					`filho`,
					`pai`,
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
		 * Gets the historical journal for an object's FluxogramaItemAsFluxogramaDepedencia relationship from the log database.
		 * @param integer intId
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalFluxogramaItemAsFluxogramaDepedenciaAssociationForId($intId) {
			$objDatabase = FluxogramaItem::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM fluxograma_depedencia_assn WHERE filho = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's FluxogramaItemAsFluxogramaDepedencia relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalFluxogramaItemAsFluxogramaDepedenciaAssociation() {
			return FluxogramaItem::GetJournalFluxogramaItemAsFluxogramaDepedenciaAssociationForId($this->intId);
		}

		/**
		 * Associates a FluxogramaItemAsFluxogramaDepedencia
		 * @param FluxogramaItem $objFluxogramaItem
		 * @return void
		*/ 
		public function AssociateFluxogramaItemAsFluxogramaDepedencia(FluxogramaItem $objFluxogramaItem) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFluxogramaItemAsFluxogramaDepedencia on this unsaved FluxogramaItem.');
			if ((is_null($objFluxogramaItem->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFluxogramaItemAsFluxogramaDepedencia on this FluxogramaItem with an unsaved FluxogramaItem.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `fluxograma_depedencia_assn` (
					`filho`,
					`pai`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objFluxogramaItem->Id) . '
				)
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalFluxogramaItemAsFluxogramaDepedenciaAssociation($objFluxogramaItem->Id, 'INSERT');
		}

		/**
		 * Unassociates a FluxogramaItemAsFluxogramaDepedencia
		 * @param FluxogramaItem $objFluxogramaItem
		 * @return void
		*/ 
		public function UnassociateFluxogramaItemAsFluxogramaDepedencia(FluxogramaItem $objFluxogramaItem) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItemAsFluxogramaDepedencia on this unsaved FluxogramaItem.');
			if ((is_null($objFluxogramaItem->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItemAsFluxogramaDepedencia on this FluxogramaItem with an unsaved FluxogramaItem.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_depedencia_assn`
				WHERE
					`filho` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`pai` = ' . $objDatabase->SqlVariable($objFluxogramaItem->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalFluxogramaItemAsFluxogramaDepedenciaAssociation($objFluxogramaItem->Id, 'DELETE');
		}

		/**
		 * Unassociates all FluxogramaItemsAsFluxogramaDepedencia
		 * @return void
		*/ 
		public function UnassociateAllFluxogramaItemsAsFluxogramaDepedencia() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllFluxogramaItemAsFluxogramaDepedenciaArray on this unsaved FluxogramaItem.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItem::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `pai` AS associated_id FROM `fluxograma_depedencia_assn` WHERE `filho` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalFluxogramaItemAsFluxogramaDepedenciaAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_depedencia_assn`
				WHERE
					`filho` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="FluxogramaItem"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Referencia" type="xsd1:Referencia"/>';
			$strToReturn .= '<element name="Cor" type="xsd1:Cor"/>';
			$strToReturn .= '<element name="FluxogramaAcoes" type="xsd1:FluxogramaAcoes"/>';
			$strToReturn .= '<element name="FluxogramaAcoesTempo" type="xsd1:FluxogramaAcoesTempo"/>';
			$strToReturn .= '<element name="Profundidade" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('FluxogramaItem', $strComplexTypeArray)) {
				$strComplexTypeArray['FluxogramaItem'] = FluxogramaItem::GetSoapComplexTypeXml();
				Referencia::AlterSoapComplexTypeArray($strComplexTypeArray);
				Cor::AlterSoapComplexTypeArray($strComplexTypeArray);
				FluxogramaAcoes::AlterSoapComplexTypeArray($strComplexTypeArray);
				FluxogramaAcoesTempo::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, FluxogramaItem::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new FluxogramaItem();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'Referencia')) &&
				($objSoapObject->Referencia))
				$objToReturn->Referencia = Referencia::GetObjectFromSoapObject($objSoapObject->Referencia);
			if ((property_exists($objSoapObject, 'Cor')) &&
				($objSoapObject->Cor))
				$objToReturn->Cor = Cor::GetObjectFromSoapObject($objSoapObject->Cor);
			if ((property_exists($objSoapObject, 'FluxogramaAcoes')) &&
				($objSoapObject->FluxogramaAcoes))
				$objToReturn->FluxogramaAcoes = FluxogramaAcoes::GetObjectFromSoapObject($objSoapObject->FluxogramaAcoes);
			if ((property_exists($objSoapObject, 'FluxogramaAcoesTempo')) &&
				($objSoapObject->FluxogramaAcoesTempo))
				$objToReturn->FluxogramaAcoesTempo = FluxogramaAcoesTempo::GetObjectFromSoapObject($objSoapObject->FluxogramaAcoesTempo);
			if (property_exists($objSoapObject, 'Profundidade'))
				$objToReturn->intProfundidade = $objSoapObject->Profundidade;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, FluxogramaItem::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objReferencia)
				$objObject->objReferencia = Referencia::GetSoapObjectFromObject($objObject->objReferencia, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intReferenciaId = null;
			if ($objObject->objCor)
				$objObject->objCor = Cor::GetSoapObjectFromObject($objObject->objCor, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCorId = null;
			if ($objObject->objFluxogramaAcoes)
				$objObject->objFluxogramaAcoes = FluxogramaAcoes::GetSoapObjectFromObject($objObject->objFluxogramaAcoes, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFluxogramaAcoesId = null;
			if ($objObject->objFluxogramaAcoesTempo)
				$objObject->objFluxogramaAcoesTempo = FluxogramaAcoesTempo::GetSoapObjectFromObject($objObject->objFluxogramaAcoesTempo, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFluxogramaAcoesTempoId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Filho
	 * @property-read QQNodeFluxogramaItem $FluxogramaItem
	 * @property-read QQNodeFluxogramaItem $_ChildTableNode
	 */
	class QQNodeFluxogramaItemParentFluxogramaItemAsFluxogramaDepedencia extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'parentfluxogramaitemasfluxogramadepedencia';

		protected $strTableName = 'fluxograma_depedencia_assn';
		protected $strPrimaryKey = 'pai';
		protected $strClassName = 'FluxogramaItem';

		public function __get($strName) {
			switch ($strName) {
				case 'Filho':
					return new QQNode('filho', 'Filho', 'integer', $this);
				case 'FluxogramaItem':
					return new QQNodeFluxogramaItem('filho', 'Filho', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeFluxogramaItem('filho', 'Filho', 'integer', $this);
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
	 * @property-read QQNode $Pai
	 * @property-read QQNodeFluxogramaItem $FluxogramaItem
	 * @property-read QQNodeFluxogramaItem $_ChildTableNode
	 */
	class QQNodeFluxogramaItemFluxogramaItemAsFluxogramaDepedencia extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'fluxogramaitemasfluxogramadepedencia';

		protected $strTableName = 'fluxograma_depedencia_assn';
		protected $strPrimaryKey = 'filho';
		protected $strClassName = 'FluxogramaItem';

		public function __get($strName) {
			switch ($strName) {
				case 'Pai':
					return new QQNode('pai', 'Pai', 'integer', $this);
				case 'FluxogramaItem':
					return new QQNodeFluxogramaItem('pai', 'Pai', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeFluxogramaItem('pai', 'Pai', 'integer', $this);
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
	 * @property-read QQNode $ReferenciaId
	 * @property-read QQNodeReferencia $Referencia
	 * @property-read QQNode $CorId
	 * @property-read QQNodeCor $Cor
	 * @property-read QQNode $FluxogramaAcoesId
	 * @property-read QQNodeFluxogramaAcoes $FluxogramaAcoes
	 * @property-read QQNode $FluxogramaAcoesTempoId
	 * @property-read QQNodeFluxogramaAcoesTempo $FluxogramaAcoesTempo
	 * @property-read QQNode $Profundidade
	 * @property-read QQNodeFluxogramaItemParentFluxogramaItemAsFluxogramaDepedencia $ParentFluxogramaItemAsFluxogramaDepedencia
	 * @property-read QQNodeFluxogramaItemFluxogramaItemAsFluxogramaDepedencia $FluxogramaItemAsFluxogramaDepedencia
	 */
	class QQNodeFluxogramaItem extends QQNode {
		protected $strTableName = 'fluxograma_item';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FluxogramaItem';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'ReferenciaId':
					return new QQNode('referencia_id', 'ReferenciaId', 'integer', $this);
				case 'Referencia':
					return new QQNodeReferencia('referencia_id', 'Referencia', 'integer', $this);
				case 'CorId':
					return new QQNode('cor_id', 'CorId', 'integer', $this);
				case 'Cor':
					return new QQNodeCor('cor_id', 'Cor', 'integer', $this);
				case 'FluxogramaAcoesId':
					return new QQNode('fluxograma_acoes_id', 'FluxogramaAcoesId', 'integer', $this);
				case 'FluxogramaAcoes':
					return new QQNodeFluxogramaAcoes('fluxograma_acoes_id', 'FluxogramaAcoes', 'integer', $this);
				case 'FluxogramaAcoesTempoId':
					return new QQNode('fluxograma_acoes_tempo_id', 'FluxogramaAcoesTempoId', 'integer', $this);
				case 'FluxogramaAcoesTempo':
					return new QQNodeFluxogramaAcoesTempo('fluxograma_acoes_tempo_id', 'FluxogramaAcoesTempo', 'integer', $this);
				case 'Profundidade':
					return new QQNode('profundidade', 'Profundidade', 'integer', $this);
				case 'ParentFluxogramaItemAsFluxogramaDepedencia':
					return new QQNodeFluxogramaItemParentFluxogramaItemAsFluxogramaDepedencia($this);
				case 'FluxogramaItemAsFluxogramaDepedencia':
					return new QQNodeFluxogramaItemFluxogramaItemAsFluxogramaDepedencia($this);

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
	 * @property-read QQNode $ReferenciaId
	 * @property-read QQNodeReferencia $Referencia
	 * @property-read QQNode $CorId
	 * @property-read QQNodeCor $Cor
	 * @property-read QQNode $FluxogramaAcoesId
	 * @property-read QQNodeFluxogramaAcoes $FluxogramaAcoes
	 * @property-read QQNode $FluxogramaAcoesTempoId
	 * @property-read QQNodeFluxogramaAcoesTempo $FluxogramaAcoesTempo
	 * @property-read QQNode $Profundidade
	 * @property-read QQNodeFluxogramaItemParentFluxogramaItemAsFluxogramaDepedencia $ParentFluxogramaItemAsFluxogramaDepedencia
	 * @property-read QQNodeFluxogramaItemFluxogramaItemAsFluxogramaDepedencia $FluxogramaItemAsFluxogramaDepedencia
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeFluxogramaItem extends QQReverseReferenceNode {
		protected $strTableName = 'fluxograma_item';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FluxogramaItem';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'ReferenciaId':
					return new QQNode('referencia_id', 'ReferenciaId', 'integer', $this);
				case 'Referencia':
					return new QQNodeReferencia('referencia_id', 'Referencia', 'integer', $this);
				case 'CorId':
					return new QQNode('cor_id', 'CorId', 'integer', $this);
				case 'Cor':
					return new QQNodeCor('cor_id', 'Cor', 'integer', $this);
				case 'FluxogramaAcoesId':
					return new QQNode('fluxograma_acoes_id', 'FluxogramaAcoesId', 'integer', $this);
				case 'FluxogramaAcoes':
					return new QQNodeFluxogramaAcoes('fluxograma_acoes_id', 'FluxogramaAcoes', 'integer', $this);
				case 'FluxogramaAcoesTempoId':
					return new QQNode('fluxograma_acoes_tempo_id', 'FluxogramaAcoesTempoId', 'integer', $this);
				case 'FluxogramaAcoesTempo':
					return new QQNodeFluxogramaAcoesTempo('fluxograma_acoes_tempo_id', 'FluxogramaAcoesTempo', 'integer', $this);
				case 'Profundidade':
					return new QQNode('profundidade', 'Profundidade', 'integer', $this);
				case 'ParentFluxogramaItemAsFluxogramaDepedencia':
					return new QQNodeFluxogramaItemParentFluxogramaItemAsFluxogramaDepedencia($this);
				case 'FluxogramaItemAsFluxogramaDepedencia':
					return new QQNodeFluxogramaItemFluxogramaItemAsFluxogramaDepedencia($this);

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