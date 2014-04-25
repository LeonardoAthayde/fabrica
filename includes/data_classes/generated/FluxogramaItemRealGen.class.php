<?php
	/**
	 * The abstract FluxogramaItemRealGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the FluxogramaItemReal subclass which
	 * extends this FluxogramaItemRealGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the FluxogramaItemReal class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Referencia the value for strReferencia (Not Null)
	 * @property string $Acao the value for strAcao 
	 * @property string $Maquina the value for strMaquina 
	 * @property integer $Tempo the value for intTempo 
	 * @property integer $Profundidade the value for intProfundidade (Not Null)
	 * @property integer $FluxogramaItemModeloId the value for intFluxogramaItemModeloId (Not Null)
	 * @property BalancoAcoes $BalancoAcoes the value for the BalancoAcoes object that uniquely references this FluxogramaItemReal
	 * @property FluxogramaItemReal $_ParentFluxogramaItemRealAsFluxogramaDepedenciaReal the value for the private _objParentFluxogramaItemRealAsFluxogramaDepedenciaReal (Read-Only) if set due to an expansion on the fluxograma_depedencia_real_assn association table
	 * @property FluxogramaItemReal[] $_ParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray the value for the private _objParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray (Read-Only) if set due to an ExpandAsArray on the fluxograma_depedencia_real_assn association table
	 * @property FluxogramaItemReal $_FluxogramaItemRealAsFluxogramaDepedenciaReal the value for the private _objFluxogramaItemRealAsFluxogramaDepedenciaReal (Read-Only) if set due to an expansion on the fluxograma_depedencia_real_assn association table
	 * @property FluxogramaItemReal[] $_FluxogramaItemRealAsFluxogramaDepedenciaRealArray the value for the private _objFluxogramaItemRealAsFluxogramaDepedenciaRealArray (Read-Only) if set due to an ExpandAsArray on the fluxograma_depedencia_real_assn association table
	 * @property BalancoAcoesDepedencia $_BalancoAcoesDepedencia the value for the private _objBalancoAcoesDepedencia (Read-Only) if set due to an expansion on the balanco_acoes_depedencia.fluxograma_item_real_id reverse relationship
	 * @property BalancoAcoesDepedencia[] $_BalancoAcoesDepedenciaArray the value for the private _objBalancoAcoesDepedenciaArray (Read-Only) if set due to an ExpandAsArray on the balanco_acoes_depedencia.fluxograma_item_real_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FluxogramaItemRealGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column fluxograma_item_real.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item_real.referencia
		 * @var string strReferencia
		 */
		protected $strReferencia;
		const ReferenciaMaxLength = 100;
		const ReferenciaDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item_real.acao
		 * @var string strAcao
		 */
		protected $strAcao;
		const AcaoMaxLength = 100;
		const AcaoDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item_real.maquina
		 * @var string strMaquina
		 */
		protected $strMaquina;
		const MaquinaMaxLength = 100;
		const MaquinaDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item_real.tempo
		 * @var integer intTempo
		 */
		protected $intTempo;
		const TempoDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item_real.profundidade
		 * @var integer intProfundidade
		 */
		protected $intProfundidade;
		const ProfundidadeDefault = null;


		/**
		 * Protected member variable that maps to the database column fluxograma_item_real.fluxograma_item_modelo_id
		 * @var integer intFluxogramaItemModeloId
		 */
		protected $intFluxogramaItemModeloId;
		const FluxogramaItemModeloIdDefault = null;


		/**
		 * Private member variable that stores a reference to a single ParentFluxogramaItemRealAsFluxogramaDepedenciaReal object
		 * (of type FluxogramaItemReal), if this FluxogramaItemReal object was restored with
		 * an expansion on the fluxograma_depedencia_real_assn association table.
		 * @var FluxogramaItemReal _objParentFluxogramaItemRealAsFluxogramaDepedenciaReal;
		 */
		private $_objParentFluxogramaItemRealAsFluxogramaDepedenciaReal;

		/**
		 * Private member variable that stores a reference to an array of ParentFluxogramaItemRealAsFluxogramaDepedenciaReal objects
		 * (of type FluxogramaItemReal[]), if this FluxogramaItemReal object was restored with
		 * an ExpandAsArray on the fluxograma_depedencia_real_assn association table.
		 * @var FluxogramaItemReal[] _objParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray;
		 */
		private $_objParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray = array();

		/**
		 * Private member variable that stores a reference to a single FluxogramaItemRealAsFluxogramaDepedenciaReal object
		 * (of type FluxogramaItemReal), if this FluxogramaItemReal object was restored with
		 * an expansion on the fluxograma_depedencia_real_assn association table.
		 * @var FluxogramaItemReal _objFluxogramaItemRealAsFluxogramaDepedenciaReal;
		 */
		private $_objFluxogramaItemRealAsFluxogramaDepedenciaReal;

		/**
		 * Private member variable that stores a reference to an array of FluxogramaItemRealAsFluxogramaDepedenciaReal objects
		 * (of type FluxogramaItemReal[]), if this FluxogramaItemReal object was restored with
		 * an ExpandAsArray on the fluxograma_depedencia_real_assn association table.
		 * @var FluxogramaItemReal[] _objFluxogramaItemRealAsFluxogramaDepedenciaRealArray;
		 */
		private $_objFluxogramaItemRealAsFluxogramaDepedenciaRealArray = array();

		/**
		 * Private member variable that stores a reference to a single BalancoAcoesDepedencia object
		 * (of type BalancoAcoesDepedencia), if this FluxogramaItemReal object was restored with
		 * an expansion on the balanco_acoes_depedencia association table.
		 * @var BalancoAcoesDepedencia _objBalancoAcoesDepedencia;
		 */
		private $_objBalancoAcoesDepedencia;

		/**
		 * Private member variable that stores a reference to an array of BalancoAcoesDepedencia objects
		 * (of type BalancoAcoesDepedencia[]), if this FluxogramaItemReal object was restored with
		 * an ExpandAsArray on the balanco_acoes_depedencia association table.
		 * @var BalancoAcoesDepedencia[] _objBalancoAcoesDepedenciaArray;
		 */
		private $_objBalancoAcoesDepedenciaArray = array();

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
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column balanco_acoes.fluxograma_item_real_id.
		 *
		 * NOTE: Always use the BalancoAcoes property getter to correctly retrieve this BalancoAcoes object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var BalancoAcoes objBalancoAcoes
		 */
		protected $objBalancoAcoes;
		
		/**
		 * Used internally to manage whether the adjoined BalancoAcoes object
		 * needs to be updated on save.
		 * 
		 * NOTE: Do not manually update this value 
		 */
		protected $blnDirtyBalancoAcoes;





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
		 * Load a FluxogramaItemReal from PK Info
		 * @param integer $intId
		 * @return FluxogramaItemReal
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return FluxogramaItemReal::QuerySingle(
				QQ::Equal(QQN::FluxogramaItemReal()->Id, $intId)
			);
		}

		/**
		 * Load all FluxogramaItemReals
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItemReal[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call FluxogramaItemReal::QueryArray to perform the LoadAll query
			try {
				return FluxogramaItemReal::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all FluxogramaItemReals
		 * @return int
		 */
		public static function CountAll() {
			// Call FluxogramaItemReal::QueryCount to perform the CountAll query
			return FluxogramaItemReal::QueryCount(QQ::All());
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
			$objDatabase = FluxogramaItemReal::GetDatabase();

			// Create/Build out the QueryBuilder object with FluxogramaItemReal-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'fluxograma_item_real');
			FluxogramaItemReal::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('fluxograma_item_real');

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
		 * Static Qcodo Query method to query for a single FluxogramaItemReal object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FluxogramaItemReal the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FluxogramaItemReal::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new FluxogramaItemReal object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FluxogramaItemReal::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return FluxogramaItemReal::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of FluxogramaItemReal objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FluxogramaItemReal[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FluxogramaItemReal::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return FluxogramaItemReal::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = FluxogramaItemReal::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of FluxogramaItemReal objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FluxogramaItemReal::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = FluxogramaItemReal::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'fluxograma_item_real_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with FluxogramaItemReal-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				FluxogramaItemReal::GetSelectFields($objQueryBuilder);
				FluxogramaItemReal::GetFromFields($objQueryBuilder);

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
			return FluxogramaItemReal::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this FluxogramaItemReal
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'fluxograma_item_real';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'referencia', $strAliasPrefix . 'referencia');
			$objBuilder->AddSelectItem($strTableName, 'acao', $strAliasPrefix . 'acao');
			$objBuilder->AddSelectItem($strTableName, 'maquina', $strAliasPrefix . 'maquina');
			$objBuilder->AddSelectItem($strTableName, 'tempo', $strAliasPrefix . 'tempo');
			$objBuilder->AddSelectItem($strTableName, 'profundidade', $strAliasPrefix . 'profundidade');
			$objBuilder->AddSelectItem($strTableName, 'fluxograma_item_modelo_id', $strAliasPrefix . 'fluxograma_item_modelo_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a FluxogramaItemReal from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this FluxogramaItemReal::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return FluxogramaItemReal
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
					$strAliasPrefix = 'fluxograma_item_real__';

				$strAlias = $strAliasPrefix . 'parentfluxogramaitemrealasfluxogramadepedenciareal__filho__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray)) {
						$objPreviousChildItem = $objPreviousItem->_objParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray[$intPreviousChildItemCount - 1];
						$objChildItem = FluxogramaItemReal::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentfluxogramaitemrealasfluxogramadepedenciareal__filho__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray[] = $objChildItem;
					} else
						$objPreviousItem->_objParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray[] = FluxogramaItemReal::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentfluxogramaitemrealasfluxogramadepedenciareal__filho__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'fluxogramaitemrealasfluxogramadepedenciareal__pai__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objFluxogramaItemRealAsFluxogramaDepedenciaRealArray)) {
						$objPreviousChildItem = $objPreviousItem->_objFluxogramaItemRealAsFluxogramaDepedenciaRealArray[$intPreviousChildItemCount - 1];
						$objChildItem = FluxogramaItemReal::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxogramaitemrealasfluxogramadepedenciareal__pai__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objFluxogramaItemRealAsFluxogramaDepedenciaRealArray[] = $objChildItem;
					} else
						$objPreviousItem->_objFluxogramaItemRealAsFluxogramaDepedenciaRealArray[] = FluxogramaItemReal::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxogramaitemrealasfluxogramadepedenciareal__pai__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}


				$strAlias = $strAliasPrefix . 'balancoacoesdepedencia__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objBalancoAcoesDepedenciaArray)) {
						$objPreviousChildItem = $objPreviousItem->_objBalancoAcoesDepedenciaArray[$intPreviousChildItemCount - 1];
						$objChildItem = BalancoAcoesDepedencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoesdepedencia__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objBalancoAcoesDepedenciaArray[] = $objChildItem;
					} else
						$objPreviousItem->_objBalancoAcoesDepedenciaArray[] = BalancoAcoesDepedencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoesdepedencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'fluxograma_item_real__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the FluxogramaItemReal object
			$objToReturn = new FluxogramaItemReal();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'referencia', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'referencia'] : $strAliasPrefix . 'referencia';
			$objToReturn->strReferencia = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'acao', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'acao'] : $strAliasPrefix . 'acao';
			$objToReturn->strAcao = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'maquina', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'maquina'] : $strAliasPrefix . 'maquina';
			$objToReturn->strMaquina = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'tempo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tempo'] : $strAliasPrefix . 'tempo';
			$objToReturn->intTempo = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'profundidade', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'profundidade'] : $strAliasPrefix . 'profundidade';
			$objToReturn->intProfundidade = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fluxograma_item_modelo_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fluxograma_item_modelo_id'] : $strAliasPrefix . 'fluxograma_item_modelo_id';
			$objToReturn->intFluxogramaItemModeloId = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'fluxograma_item_real__';


			// Check for BalancoAcoes Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'balancoacoes__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objBalancoAcoes = BalancoAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoes__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objBalancoAcoes = false;
			}


			// Check for ParentFluxogramaItemRealAsFluxogramaDepedenciaReal Virtual Binding
			$strAlias = $strAliasPrefix . 'parentfluxogramaitemrealasfluxogramadepedenciareal__filho__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray[] = FluxogramaItemReal::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentfluxogramaitemrealasfluxogramadepedenciareal__filho__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objParentFluxogramaItemRealAsFluxogramaDepedenciaReal = FluxogramaItemReal::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentfluxogramaitemrealasfluxogramadepedenciareal__filho__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for FluxogramaItemRealAsFluxogramaDepedenciaReal Virtual Binding
			$strAlias = $strAliasPrefix . 'fluxogramaitemrealasfluxogramadepedenciareal__pai__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objFluxogramaItemRealAsFluxogramaDepedenciaRealArray[] = FluxogramaItemReal::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxogramaitemrealasfluxogramadepedenciareal__pai__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFluxogramaItemRealAsFluxogramaDepedenciaReal = FluxogramaItemReal::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxogramaitemrealasfluxogramadepedenciareal__pai__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


			// Check for BalancoAcoesDepedencia Virtual Binding
			$strAlias = $strAliasPrefix . 'balancoacoesdepedencia__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objBalancoAcoesDepedenciaArray[] = BalancoAcoesDepedencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoesdepedencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objBalancoAcoesDepedencia = BalancoAcoesDepedencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoesdepedencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of FluxogramaItemReals from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return FluxogramaItemReal[]
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
					$objItem = FluxogramaItemReal::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = FluxogramaItemReal::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single FluxogramaItemReal object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return FluxogramaItemReal next row resulting from the query
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
			return FluxogramaItemReal::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single FluxogramaItemReal object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return FluxogramaItemReal
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return FluxogramaItemReal::QuerySingle(
				QQ::Equal(QQN::FluxogramaItemReal()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FluxogramaItemReal objects,
		 * by Referencia Index(es)
		 * @param string $strReferencia
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItemReal[]
		*/
		public static function LoadArrayByReferencia($strReferencia, $objOptionalClauses = null) {
			// Call FluxogramaItemReal::QueryArray to perform the LoadArrayByReferencia query
			try {
				return FluxogramaItemReal::QueryArray(
					QQ::Equal(QQN::FluxogramaItemReal()->Referencia, $strReferencia),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaItemReals
		 * by Referencia Index(es)
		 * @param string $strReferencia
		 * @return int
		*/
		public static function CountByReferencia($strReferencia, $objOptionalClauses = null) {
			// Call FluxogramaItemReal::QueryCount to perform the CountByReferencia query
			return FluxogramaItemReal::QueryCount(
				QQ::Equal(QQN::FluxogramaItemReal()->Referencia, $strReferencia)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FluxogramaItemReal objects,
		 * by Maquina Index(es)
		 * @param string $strMaquina
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItemReal[]
		*/
		public static function LoadArrayByMaquina($strMaquina, $objOptionalClauses = null) {
			// Call FluxogramaItemReal::QueryArray to perform the LoadArrayByMaquina query
			try {
				return FluxogramaItemReal::QueryArray(
					QQ::Equal(QQN::FluxogramaItemReal()->Maquina, $strMaquina),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaItemReals
		 * by Maquina Index(es)
		 * @param string $strMaquina
		 * @return int
		*/
		public static function CountByMaquina($strMaquina, $objOptionalClauses = null) {
			// Call FluxogramaItemReal::QueryCount to perform the CountByMaquina query
			return FluxogramaItemReal::QueryCount(
				QQ::Equal(QQN::FluxogramaItemReal()->Maquina, $strMaquina)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of FluxogramaItemReal objects for a given ParentFluxogramaItemRealAsFluxogramaDepedenciaReal
		 * via the fluxograma_depedencia_real_assn table
		 * @param integer $intFilho
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItemReal[]
		*/
		public static function LoadArrayByParentFluxogramaItemRealAsFluxogramaDepedenciaReal($intFilho, $objOptionalClauses = null) {
			// Call FluxogramaItemReal::QueryArray to perform the LoadArrayByParentFluxogramaItemRealAsFluxogramaDepedenciaReal query
			try {
				return FluxogramaItemReal::QueryArray(
					QQ::Equal(QQN::FluxogramaItemReal()->ParentFluxogramaItemRealAsFluxogramaDepedenciaReal->Filho, $intFilho),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaItemReals for a given ParentFluxogramaItemRealAsFluxogramaDepedenciaReal
		 * via the fluxograma_depedencia_real_assn table
		 * @param integer $intFilho
		 * @return int
		*/
		public static function CountByParentFluxogramaItemRealAsFluxogramaDepedenciaReal($intFilho, $objOptionalClauses = null) {
			return FluxogramaItemReal::QueryCount(
				QQ::Equal(QQN::FluxogramaItemReal()->ParentFluxogramaItemRealAsFluxogramaDepedenciaReal->Filho, $intFilho),
				$objOptionalClauses
			);
		}
			/**
		 * Load an array of FluxogramaItemReal objects for a given FluxogramaItemRealAsFluxogramaDepedenciaReal
		 * via the fluxograma_depedencia_real_assn table
		 * @param integer $intPai
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItemReal[]
		*/
		public static function LoadArrayByFluxogramaItemRealAsFluxogramaDepedenciaReal($intPai, $objOptionalClauses = null) {
			// Call FluxogramaItemReal::QueryArray to perform the LoadArrayByFluxogramaItemRealAsFluxogramaDepedenciaReal query
			try {
				return FluxogramaItemReal::QueryArray(
					QQ::Equal(QQN::FluxogramaItemReal()->FluxogramaItemRealAsFluxogramaDepedenciaReal->Pai, $intPai),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FluxogramaItemReals for a given FluxogramaItemRealAsFluxogramaDepedenciaReal
		 * via the fluxograma_depedencia_real_assn table
		 * @param integer $intPai
		 * @return int
		*/
		public static function CountByFluxogramaItemRealAsFluxogramaDepedenciaReal($intPai, $objOptionalClauses = null) {
			return FluxogramaItemReal::QueryCount(
				QQ::Equal(QQN::FluxogramaItemReal()->FluxogramaItemRealAsFluxogramaDepedenciaReal->Pai, $intPai),
				$objOptionalClauses
			);
		}




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this FluxogramaItemReal
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = FluxogramaItemReal::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `fluxograma_item_real` (
							`referencia`,
							`acao`,
							`maquina`,
							`tempo`,
							`profundidade`,
							`fluxograma_item_modelo_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strReferencia) . ',
							' . $objDatabase->SqlVariable($this->strAcao) . ',
							' . $objDatabase->SqlVariable($this->strMaquina) . ',
							' . $objDatabase->SqlVariable($this->intTempo) . ',
							' . $objDatabase->SqlVariable($this->intProfundidade) . ',
							' . $objDatabase->SqlVariable($this->intFluxogramaItemModeloId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('fluxograma_item_real', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`fluxograma_item_real`
						SET
							`referencia` = ' . $objDatabase->SqlVariable($this->strReferencia) . ',
							`acao` = ' . $objDatabase->SqlVariable($this->strAcao) . ',
							`maquina` = ' . $objDatabase->SqlVariable($this->strMaquina) . ',
							`tempo` = ' . $objDatabase->SqlVariable($this->intTempo) . ',
							`profundidade` = ' . $objDatabase->SqlVariable($this->intProfundidade) . ',
							`fluxograma_item_modelo_id` = ' . $objDatabase->SqlVariable($this->intFluxogramaItemModeloId) . '
						WHERE
							`id` = ' . $objDatabase->SqlVariable($this->intId) . '
					');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('UPDATE');
				}

		
		
				// Update the adjoined BalancoAcoes object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyBalancoAcoes) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = BalancoAcoes::LoadByFluxogramaItemRealId($this->intId)) {
						$objAssociated->FluxogramaItemRealId = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objBalancoAcoes) {
						$this->objBalancoAcoes->FluxogramaItemRealId = $this->intId;
						$this->objBalancoAcoes->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyBalancoAcoes = false;
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
		 * Delete this FluxogramaItemReal
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this FluxogramaItemReal with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItemReal::GetDatabase();

			
			
			// Update the adjoined BalancoAcoes object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = BalancoAcoes::LoadByFluxogramaItemRealId($this->intId)) {
				$objAssociated->Delete();
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_item_real`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all FluxogramaItemReals
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = FluxogramaItemReal::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_item_real`');
		}

		/**
		 * Truncate fluxograma_item_real table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = FluxogramaItemReal::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `fluxograma_item_real`');
		}

		/**
		 * Reload this FluxogramaItemReal from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved FluxogramaItemReal object.');

			// Reload the Object
			$objReloaded = FluxogramaItemReal::Load($this->intId);

			// Update $this's local variables to match
			$this->strReferencia = $objReloaded->strReferencia;
			$this->strAcao = $objReloaded->strAcao;
			$this->strMaquina = $objReloaded->strMaquina;
			$this->intTempo = $objReloaded->intTempo;
			$this->intProfundidade = $objReloaded->intProfundidade;
			$this->intFluxogramaItemModeloId = $objReloaded->intFluxogramaItemModeloId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = FluxogramaItemReal::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `fluxograma_item_real` (
					`id`,
					`referencia`,
					`acao`,
					`maquina`,
					`tempo`,
					`profundidade`,
					`fluxograma_item_modelo_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strReferencia) . ',
					' . $objDatabase->SqlVariable($this->strAcao) . ',
					' . $objDatabase->SqlVariable($this->strMaquina) . ',
					' . $objDatabase->SqlVariable($this->intTempo) . ',
					' . $objDatabase->SqlVariable($this->intProfundidade) . ',
					' . $objDatabase->SqlVariable($this->intFluxogramaItemModeloId) . ',
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
		 * @return FluxogramaItemReal[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = FluxogramaItemReal::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM fluxograma_item_real WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return FluxogramaItemReal::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return FluxogramaItemReal[]
		 */
		public function GetJournal() {
			return FluxogramaItemReal::GetJournalForId($this->intId);
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

				case 'Referencia':
					// Gets the value for strReferencia (Not Null)
					// @return string
					return $this->strReferencia;

				case 'Acao':
					// Gets the value for strAcao 
					// @return string
					return $this->strAcao;

				case 'Maquina':
					// Gets the value for strMaquina 
					// @return string
					return $this->strMaquina;

				case 'Tempo':
					// Gets the value for intTempo 
					// @return integer
					return $this->intTempo;

				case 'Profundidade':
					// Gets the value for intProfundidade (Not Null)
					// @return integer
					return $this->intProfundidade;

				case 'FluxogramaItemModeloId':
					// Gets the value for intFluxogramaItemModeloId (Not Null)
					// @return integer
					return $this->intFluxogramaItemModeloId;


				///////////////////
				// Member Objects
				///////////////////
		
		
				case 'BalancoAcoes':
					// Gets the value for the BalancoAcoes object that uniquely references this FluxogramaItemReal
					// by objBalancoAcoes (Unique)
					// @return BalancoAcoes
					try {
						if ($this->objBalancoAcoes === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objBalancoAcoes)
							$this->objBalancoAcoes = BalancoAcoes::LoadByFluxogramaItemRealId($this->intId);
						return $this->objBalancoAcoes;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_ParentFluxogramaItemRealAsFluxogramaDepedenciaReal':
					// Gets the value for the private _objParentFluxogramaItemRealAsFluxogramaDepedenciaReal (Read-Only)
					// if set due to an expansion on the fluxograma_depedencia_real_assn association table
					// @return FluxogramaItemReal
					return $this->_objParentFluxogramaItemRealAsFluxogramaDepedenciaReal;

				case '_ParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray':
					// Gets the value for the private _objParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray (Read-Only)
					// if set due to an ExpandAsArray on the fluxograma_depedencia_real_assn association table
					// @return FluxogramaItemReal[]
					return (array) $this->_objParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray;

				case '_FluxogramaItemRealAsFluxogramaDepedenciaReal':
					// Gets the value for the private _objFluxogramaItemRealAsFluxogramaDepedenciaReal (Read-Only)
					// if set due to an expansion on the fluxograma_depedencia_real_assn association table
					// @return FluxogramaItemReal
					return $this->_objFluxogramaItemRealAsFluxogramaDepedenciaReal;

				case '_FluxogramaItemRealAsFluxogramaDepedenciaRealArray':
					// Gets the value for the private _objFluxogramaItemRealAsFluxogramaDepedenciaRealArray (Read-Only)
					// if set due to an ExpandAsArray on the fluxograma_depedencia_real_assn association table
					// @return FluxogramaItemReal[]
					return (array) $this->_objFluxogramaItemRealAsFluxogramaDepedenciaRealArray;

				case '_BalancoAcoesDepedencia':
					// Gets the value for the private _objBalancoAcoesDepedencia (Read-Only)
					// if set due to an expansion on the balanco_acoes_depedencia.fluxograma_item_real_id reverse relationship
					// @return BalancoAcoesDepedencia
					return $this->_objBalancoAcoesDepedencia;

				case '_BalancoAcoesDepedenciaArray':
					// Gets the value for the private _objBalancoAcoesDepedenciaArray (Read-Only)
					// if set due to an ExpandAsArray on the balanco_acoes_depedencia.fluxograma_item_real_id reverse relationship
					// @return BalancoAcoesDepedencia[]
					return (array) $this->_objBalancoAcoesDepedenciaArray;


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
				case 'Referencia':
					// Sets the value for strReferencia (Not Null)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strReferencia = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Acao':
					// Sets the value for strAcao 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strAcao = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Maquina':
					// Sets the value for strMaquina 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strMaquina = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Tempo':
					// Sets the value for intTempo 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intTempo = QType::Cast($mixValue, QType::Integer));
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

				case 'FluxogramaItemModeloId':
					// Sets the value for intFluxogramaItemModeloId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intFluxogramaItemModeloId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'BalancoAcoes':
					// Sets the value for the BalancoAcoes object referenced by objBalancoAcoes (Unique)
					// @param BalancoAcoes $mixValue
					// @return BalancoAcoes
					if (is_null($mixValue)) {
						$this->objBalancoAcoes = null;

						// Make sure we update the adjoined BalancoAcoes object the next time we call Save()
						$this->blnDirtyBalancoAcoes = true;

						return null;
					} else {
						// Make sure $mixValue actually is a BalancoAcoes object
						try {
							$mixValue = QType::Cast($mixValue, 'BalancoAcoes');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objBalancoAcoes to a DIFFERENT $mixValue?
						if ((!$this->BalancoAcoes) || ($this->BalancoAcoes->Id != $mixValue->Id)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined BalancoAcoes object the next time we call Save()
							$this->blnDirtyBalancoAcoes = true;

							// Update Local Member Variable
							$this->objBalancoAcoes = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

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

			
		
		// Related Objects' Methods for BalancoAcoesDepedencia
		//-------------------------------------------------------------------

		/**
		 * Gets all associated BalancoAcoesDepedencias as an array of BalancoAcoesDepedencia objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return BalancoAcoesDepedencia[]
		*/ 
		public function GetBalancoAcoesDepedenciaArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return BalancoAcoesDepedencia::LoadArrayByFluxogramaItemRealId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated BalancoAcoesDepedencias
		 * @return int
		*/ 
		public function CountBalancoAcoesDepedencias() {
			if ((is_null($this->intId)))
				return 0;

			return BalancoAcoesDepedencia::CountByFluxogramaItemRealId($this->intId);
		}

		/**
		 * Associates a BalancoAcoesDepedencia
		 * @param BalancoAcoesDepedencia $objBalancoAcoesDepedencia
		 * @return void
		*/ 
		public function AssociateBalancoAcoesDepedencia(BalancoAcoesDepedencia $objBalancoAcoesDepedencia) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBalancoAcoesDepedencia on this unsaved FluxogramaItemReal.');
			if ((is_null($objBalancoAcoesDepedencia->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBalancoAcoesDepedencia on this FluxogramaItemReal with an unsaved BalancoAcoesDepedencia.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItemReal::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balanco_acoes_depedencia`
				SET
					`fluxograma_item_real_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objBalancoAcoesDepedencia->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objBalancoAcoesDepedencia->FluxogramaItemRealId = $this->intId;
				$objBalancoAcoesDepedencia->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a BalancoAcoesDepedencia
		 * @param BalancoAcoesDepedencia $objBalancoAcoesDepedencia
		 * @return void
		*/ 
		public function UnassociateBalancoAcoesDepedencia(BalancoAcoesDepedencia $objBalancoAcoesDepedencia) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesDepedencia on this unsaved FluxogramaItemReal.');
			if ((is_null($objBalancoAcoesDepedencia->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesDepedencia on this FluxogramaItemReal with an unsaved BalancoAcoesDepedencia.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItemReal::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balanco_acoes_depedencia`
				SET
					`fluxograma_item_real_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objBalancoAcoesDepedencia->Id) . ' AND
					`fluxograma_item_real_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objBalancoAcoesDepedencia->FluxogramaItemRealId = null;
				$objBalancoAcoesDepedencia->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all BalancoAcoesDepedencias
		 * @return void
		*/ 
		public function UnassociateAllBalancoAcoesDepedencias() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesDepedencia on this unsaved FluxogramaItemReal.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItemReal::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (BalancoAcoesDepedencia::LoadArrayByFluxogramaItemRealId($this->intId) as $objBalancoAcoesDepedencia) {
					$objBalancoAcoesDepedencia->FluxogramaItemRealId = null;
					$objBalancoAcoesDepedencia->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balanco_acoes_depedencia`
				SET
					`fluxograma_item_real_id` = null
				WHERE
					`fluxograma_item_real_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated BalancoAcoesDepedencia
		 * @param BalancoAcoesDepedencia $objBalancoAcoesDepedencia
		 * @return void
		*/ 
		public function DeleteAssociatedBalancoAcoesDepedencia(BalancoAcoesDepedencia $objBalancoAcoesDepedencia) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesDepedencia on this unsaved FluxogramaItemReal.');
			if ((is_null($objBalancoAcoesDepedencia->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesDepedencia on this FluxogramaItemReal with an unsaved BalancoAcoesDepedencia.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItemReal::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_acoes_depedencia`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objBalancoAcoesDepedencia->Id) . ' AND
					`fluxograma_item_real_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objBalancoAcoesDepedencia->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated BalancoAcoesDepedencias
		 * @return void
		*/ 
		public function DeleteAllBalancoAcoesDepedencias() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesDepedencia on this unsaved FluxogramaItemReal.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItemReal::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (BalancoAcoesDepedencia::LoadArrayByFluxogramaItemRealId($this->intId) as $objBalancoAcoesDepedencia) {
					$objBalancoAcoesDepedencia->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_acoes_depedencia`
				WHERE
					`fluxograma_item_real_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		// Related Many-to-Many Objects' Methods for ParentFluxogramaItemRealAsFluxogramaDepedenciaReal
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated ParentFluxogramaItemRealsAsFluxogramaDepedenciaReal as an array of FluxogramaItemReal objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItemReal[]
		*/ 
		public function GetParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FluxogramaItemReal::LoadArrayByFluxogramaItemRealAsFluxogramaDepedenciaReal($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated ParentFluxogramaItemRealsAsFluxogramaDepedenciaReal
		 * @return int
		*/ 
		public function CountParentFluxogramaItemRealsAsFluxogramaDepedenciaReal() {
			if ((is_null($this->intId)))
				return 0;

			return FluxogramaItemReal::CountByFluxogramaItemRealAsFluxogramaDepedenciaReal($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific ParentFluxogramaItemRealAsFluxogramaDepedenciaReal
		 * @param FluxogramaItemReal $objFluxogramaItemReal
		 * @return bool
		*/
		public function IsParentFluxogramaItemRealAsFluxogramaDepedenciaRealAssociated(FluxogramaItemReal $objFluxogramaItemReal) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsParentFluxogramaItemRealAsFluxogramaDepedenciaRealAssociated on this unsaved FluxogramaItemReal.');
			if ((is_null($objFluxogramaItemReal->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsParentFluxogramaItemRealAsFluxogramaDepedenciaRealAssociated on this FluxogramaItemReal with an unsaved FluxogramaItemReal.');

			$intRowCount = FluxogramaItemReal::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::FluxogramaItemReal()->Id, $this->intId),
					QQ::Equal(QQN::FluxogramaItemReal()->ParentFluxogramaItemRealAsFluxogramaDepedenciaReal->Filho, $objFluxogramaItemReal->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Journals the ParentFluxogramaItemRealAsFluxogramaDepedenciaReal relationship into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function JournalParentFluxogramaItemRealAsFluxogramaDepedenciaRealAssociation($intAssociatedId, $strJournalCommand) {
			$objDatabase = FluxogramaItemReal::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `fluxograma_depedencia_real_assn` (
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
		 * Gets the historical journal for an object's ParentFluxogramaItemRealAsFluxogramaDepedenciaReal relationship from the log database.
		 * @param integer intId
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalParentFluxogramaItemRealAsFluxogramaDepedenciaRealAssociationForId($intId) {
			$objDatabase = FluxogramaItemReal::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM fluxograma_depedencia_real_assn WHERE pai = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's ParentFluxogramaItemRealAsFluxogramaDepedenciaReal relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalParentFluxogramaItemRealAsFluxogramaDepedenciaRealAssociation() {
			return FluxogramaItemReal::GetJournalParentFluxogramaItemRealAsFluxogramaDepedenciaRealAssociationForId($this->intId);
		}

		/**
		 * Associates a ParentFluxogramaItemRealAsFluxogramaDepedenciaReal
		 * @param FluxogramaItemReal $objFluxogramaItemReal
		 * @return void
		*/ 
		public function AssociateParentFluxogramaItemRealAsFluxogramaDepedenciaReal(FluxogramaItemReal $objFluxogramaItemReal) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateParentFluxogramaItemRealAsFluxogramaDepedenciaReal on this unsaved FluxogramaItemReal.');
			if ((is_null($objFluxogramaItemReal->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateParentFluxogramaItemRealAsFluxogramaDepedenciaReal on this FluxogramaItemReal with an unsaved FluxogramaItemReal.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItemReal::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `fluxograma_depedencia_real_assn` (
					`pai`,
					`filho`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objFluxogramaItemReal->Id) . '
				)
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalParentFluxogramaItemRealAsFluxogramaDepedenciaRealAssociation($objFluxogramaItemReal->Id, 'INSERT');
		}

		/**
		 * Unassociates a ParentFluxogramaItemRealAsFluxogramaDepedenciaReal
		 * @param FluxogramaItemReal $objFluxogramaItemReal
		 * @return void
		*/ 
		public function UnassociateParentFluxogramaItemRealAsFluxogramaDepedenciaReal(FluxogramaItemReal $objFluxogramaItemReal) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateParentFluxogramaItemRealAsFluxogramaDepedenciaReal on this unsaved FluxogramaItemReal.');
			if ((is_null($objFluxogramaItemReal->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateParentFluxogramaItemRealAsFluxogramaDepedenciaReal on this FluxogramaItemReal with an unsaved FluxogramaItemReal.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItemReal::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_depedencia_real_assn`
				WHERE
					`pai` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`filho` = ' . $objDatabase->SqlVariable($objFluxogramaItemReal->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalParentFluxogramaItemRealAsFluxogramaDepedenciaRealAssociation($objFluxogramaItemReal->Id, 'DELETE');
		}

		/**
		 * Unassociates all ParentFluxogramaItemRealsAsFluxogramaDepedenciaReal
		 * @return void
		*/ 
		public function UnassociateAllParentFluxogramaItemRealsAsFluxogramaDepedenciaReal() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllParentFluxogramaItemRealAsFluxogramaDepedenciaRealArray on this unsaved FluxogramaItemReal.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItemReal::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `filho` AS associated_id FROM `fluxograma_depedencia_real_assn` WHERE `pai` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalParentFluxogramaItemRealAsFluxogramaDepedenciaRealAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_depedencia_real_assn`
				WHERE
					`pai` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}
			
		// Related Many-to-Many Objects' Methods for FluxogramaItemRealAsFluxogramaDepedenciaReal
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated FluxogramaItemRealsAsFluxogramaDepedenciaReal as an array of FluxogramaItemReal objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FluxogramaItemReal[]
		*/ 
		public function GetFluxogramaItemRealAsFluxogramaDepedenciaRealArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return FluxogramaItemReal::LoadArrayByParentFluxogramaItemRealAsFluxogramaDepedenciaReal($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated FluxogramaItemRealsAsFluxogramaDepedenciaReal
		 * @return int
		*/ 
		public function CountFluxogramaItemRealsAsFluxogramaDepedenciaReal() {
			if ((is_null($this->intId)))
				return 0;

			return FluxogramaItemReal::CountByParentFluxogramaItemRealAsFluxogramaDepedenciaReal($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific FluxogramaItemRealAsFluxogramaDepedenciaReal
		 * @param FluxogramaItemReal $objFluxogramaItemReal
		 * @return bool
		*/
		public function IsFluxogramaItemRealAsFluxogramaDepedenciaRealAssociated(FluxogramaItemReal $objFluxogramaItemReal) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsFluxogramaItemRealAsFluxogramaDepedenciaRealAssociated on this unsaved FluxogramaItemReal.');
			if ((is_null($objFluxogramaItemReal->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsFluxogramaItemRealAsFluxogramaDepedenciaRealAssociated on this FluxogramaItemReal with an unsaved FluxogramaItemReal.');

			$intRowCount = FluxogramaItemReal::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::FluxogramaItemReal()->Id, $this->intId),
					QQ::Equal(QQN::FluxogramaItemReal()->FluxogramaItemRealAsFluxogramaDepedenciaReal->Pai, $objFluxogramaItemReal->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Journals the FluxogramaItemRealAsFluxogramaDepedenciaReal relationship into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function JournalFluxogramaItemRealAsFluxogramaDepedenciaRealAssociation($intAssociatedId, $strJournalCommand) {
			$objDatabase = FluxogramaItemReal::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `fluxograma_depedencia_real_assn` (
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
		 * Gets the historical journal for an object's FluxogramaItemRealAsFluxogramaDepedenciaReal relationship from the log database.
		 * @param integer intId
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalFluxogramaItemRealAsFluxogramaDepedenciaRealAssociationForId($intId) {
			$objDatabase = FluxogramaItemReal::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM fluxograma_depedencia_real_assn WHERE filho = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's FluxogramaItemRealAsFluxogramaDepedenciaReal relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalFluxogramaItemRealAsFluxogramaDepedenciaRealAssociation() {
			return FluxogramaItemReal::GetJournalFluxogramaItemRealAsFluxogramaDepedenciaRealAssociationForId($this->intId);
		}

		/**
		 * Associates a FluxogramaItemRealAsFluxogramaDepedenciaReal
		 * @param FluxogramaItemReal $objFluxogramaItemReal
		 * @return void
		*/ 
		public function AssociateFluxogramaItemRealAsFluxogramaDepedenciaReal(FluxogramaItemReal $objFluxogramaItemReal) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFluxogramaItemRealAsFluxogramaDepedenciaReal on this unsaved FluxogramaItemReal.');
			if ((is_null($objFluxogramaItemReal->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFluxogramaItemRealAsFluxogramaDepedenciaReal on this FluxogramaItemReal with an unsaved FluxogramaItemReal.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItemReal::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `fluxograma_depedencia_real_assn` (
					`filho`,
					`pai`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objFluxogramaItemReal->Id) . '
				)
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalFluxogramaItemRealAsFluxogramaDepedenciaRealAssociation($objFluxogramaItemReal->Id, 'INSERT');
		}

		/**
		 * Unassociates a FluxogramaItemRealAsFluxogramaDepedenciaReal
		 * @param FluxogramaItemReal $objFluxogramaItemReal
		 * @return void
		*/ 
		public function UnassociateFluxogramaItemRealAsFluxogramaDepedenciaReal(FluxogramaItemReal $objFluxogramaItemReal) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItemRealAsFluxogramaDepedenciaReal on this unsaved FluxogramaItemReal.');
			if ((is_null($objFluxogramaItemReal->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFluxogramaItemRealAsFluxogramaDepedenciaReal on this FluxogramaItemReal with an unsaved FluxogramaItemReal.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItemReal::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_depedencia_real_assn`
				WHERE
					`filho` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`pai` = ' . $objDatabase->SqlVariable($objFluxogramaItemReal->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalFluxogramaItemRealAsFluxogramaDepedenciaRealAssociation($objFluxogramaItemReal->Id, 'DELETE');
		}

		/**
		 * Unassociates all FluxogramaItemRealsAsFluxogramaDepedenciaReal
		 * @return void
		*/ 
		public function UnassociateAllFluxogramaItemRealsAsFluxogramaDepedenciaReal() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllFluxogramaItemRealAsFluxogramaDepedenciaRealArray on this unsaved FluxogramaItemReal.');

			// Get the Database Object for this Class
			$objDatabase = FluxogramaItemReal::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `pai` AS associated_id FROM `fluxograma_depedencia_real_assn` WHERE `filho` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalFluxogramaItemRealAsFluxogramaDepedenciaRealAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fluxograma_depedencia_real_assn`
				WHERE
					`filho` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="FluxogramaItemReal"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Referencia" type="xsd:string"/>';
			$strToReturn .= '<element name="Acao" type="xsd:string"/>';
			$strToReturn .= '<element name="Maquina" type="xsd:string"/>';
			$strToReturn .= '<element name="Tempo" type="xsd:int"/>';
			$strToReturn .= '<element name="Profundidade" type="xsd:int"/>';
			$strToReturn .= '<element name="FluxogramaItemModeloId" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('FluxogramaItemReal', $strComplexTypeArray)) {
				$strComplexTypeArray['FluxogramaItemReal'] = FluxogramaItemReal::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, FluxogramaItemReal::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new FluxogramaItemReal();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Referencia'))
				$objToReturn->strReferencia = $objSoapObject->Referencia;
			if (property_exists($objSoapObject, 'Acao'))
				$objToReturn->strAcao = $objSoapObject->Acao;
			if (property_exists($objSoapObject, 'Maquina'))
				$objToReturn->strMaquina = $objSoapObject->Maquina;
			if (property_exists($objSoapObject, 'Tempo'))
				$objToReturn->intTempo = $objSoapObject->Tempo;
			if (property_exists($objSoapObject, 'Profundidade'))
				$objToReturn->intProfundidade = $objSoapObject->Profundidade;
			if (property_exists($objSoapObject, 'FluxogramaItemModeloId'))
				$objToReturn->intFluxogramaItemModeloId = $objSoapObject->FluxogramaItemModeloId;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, FluxogramaItemReal::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Filho
	 * @property-read QQNodeFluxogramaItemReal $FluxogramaItemReal
	 * @property-read QQNodeFluxogramaItemReal $_ChildTableNode
	 */
	class QQNodeFluxogramaItemRealParentFluxogramaItemRealAsFluxogramaDepedenciaReal extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'parentfluxogramaitemrealasfluxogramadepedenciareal';

		protected $strTableName = 'fluxograma_depedencia_real_assn';
		protected $strPrimaryKey = 'pai';
		protected $strClassName = 'FluxogramaItemReal';

		public function __get($strName) {
			switch ($strName) {
				case 'Filho':
					return new QQNode('filho', 'Filho', 'integer', $this);
				case 'FluxogramaItemReal':
					return new QQNodeFluxogramaItemReal('filho', 'Filho', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeFluxogramaItemReal('filho', 'Filho', 'integer', $this);
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
	 * @property-read QQNodeFluxogramaItemReal $FluxogramaItemReal
	 * @property-read QQNodeFluxogramaItemReal $_ChildTableNode
	 */
	class QQNodeFluxogramaItemRealFluxogramaItemRealAsFluxogramaDepedenciaReal extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'fluxogramaitemrealasfluxogramadepedenciareal';

		protected $strTableName = 'fluxograma_depedencia_real_assn';
		protected $strPrimaryKey = 'filho';
		protected $strClassName = 'FluxogramaItemReal';

		public function __get($strName) {
			switch ($strName) {
				case 'Pai':
					return new QQNode('pai', 'Pai', 'integer', $this);
				case 'FluxogramaItemReal':
					return new QQNodeFluxogramaItemReal('pai', 'Pai', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeFluxogramaItemReal('pai', 'Pai', 'integer', $this);
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
	 * @property-read QQNode $Referencia
	 * @property-read QQNode $Acao
	 * @property-read QQNode $Maquina
	 * @property-read QQNode $Tempo
	 * @property-read QQNode $Profundidade
	 * @property-read QQNode $FluxogramaItemModeloId
	 * @property-read QQNodeFluxogramaItemRealParentFluxogramaItemRealAsFluxogramaDepedenciaReal $ParentFluxogramaItemRealAsFluxogramaDepedenciaReal
	 * @property-read QQNodeFluxogramaItemRealFluxogramaItemRealAsFluxogramaDepedenciaReal $FluxogramaItemRealAsFluxogramaDepedenciaReal
	 * @property-read QQReverseReferenceNodeBalancoAcoes $BalancoAcoes
	 * @property-read QQReverseReferenceNodeBalancoAcoesDepedencia $BalancoAcoesDepedencia
	 */
	class QQNodeFluxogramaItemReal extends QQNode {
		protected $strTableName = 'fluxograma_item_real';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FluxogramaItemReal';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Referencia':
					return new QQNode('referencia', 'Referencia', 'string', $this);
				case 'Acao':
					return new QQNode('acao', 'Acao', 'string', $this);
				case 'Maquina':
					return new QQNode('maquina', 'Maquina', 'string', $this);
				case 'Tempo':
					return new QQNode('tempo', 'Tempo', 'integer', $this);
				case 'Profundidade':
					return new QQNode('profundidade', 'Profundidade', 'integer', $this);
				case 'FluxogramaItemModeloId':
					return new QQNode('fluxograma_item_modelo_id', 'FluxogramaItemModeloId', 'integer', $this);
				case 'ParentFluxogramaItemRealAsFluxogramaDepedenciaReal':
					return new QQNodeFluxogramaItemRealParentFluxogramaItemRealAsFluxogramaDepedenciaReal($this);
				case 'FluxogramaItemRealAsFluxogramaDepedenciaReal':
					return new QQNodeFluxogramaItemRealFluxogramaItemRealAsFluxogramaDepedenciaReal($this);
				case 'BalancoAcoes':
					return new QQReverseReferenceNodeBalancoAcoes($this, 'balancoacoes', 'reverse_reference', 'fluxograma_item_real_id', 'BalancoAcoes');
				case 'BalancoAcoesDepedencia':
					return new QQReverseReferenceNodeBalancoAcoesDepedencia($this, 'balancoacoesdepedencia', 'reverse_reference', 'fluxograma_item_real_id');

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
	 * @property-read QQNode $Referencia
	 * @property-read QQNode $Acao
	 * @property-read QQNode $Maquina
	 * @property-read QQNode $Tempo
	 * @property-read QQNode $Profundidade
	 * @property-read QQNode $FluxogramaItemModeloId
	 * @property-read QQNodeFluxogramaItemRealParentFluxogramaItemRealAsFluxogramaDepedenciaReal $ParentFluxogramaItemRealAsFluxogramaDepedenciaReal
	 * @property-read QQNodeFluxogramaItemRealFluxogramaItemRealAsFluxogramaDepedenciaReal $FluxogramaItemRealAsFluxogramaDepedenciaReal
	 * @property-read QQReverseReferenceNodeBalancoAcoes $BalancoAcoes
	 * @property-read QQReverseReferenceNodeBalancoAcoesDepedencia $BalancoAcoesDepedencia
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeFluxogramaItemReal extends QQReverseReferenceNode {
		protected $strTableName = 'fluxograma_item_real';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'FluxogramaItemReal';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Referencia':
					return new QQNode('referencia', 'Referencia', 'string', $this);
				case 'Acao':
					return new QQNode('acao', 'Acao', 'string', $this);
				case 'Maquina':
					return new QQNode('maquina', 'Maquina', 'string', $this);
				case 'Tempo':
					return new QQNode('tempo', 'Tempo', 'integer', $this);
				case 'Profundidade':
					return new QQNode('profundidade', 'Profundidade', 'integer', $this);
				case 'FluxogramaItemModeloId':
					return new QQNode('fluxograma_item_modelo_id', 'FluxogramaItemModeloId', 'integer', $this);
				case 'ParentFluxogramaItemRealAsFluxogramaDepedenciaReal':
					return new QQNodeFluxogramaItemRealParentFluxogramaItemRealAsFluxogramaDepedenciaReal($this);
				case 'FluxogramaItemRealAsFluxogramaDepedenciaReal':
					return new QQNodeFluxogramaItemRealFluxogramaItemRealAsFluxogramaDepedenciaReal($this);
				case 'BalancoAcoes':
					return new QQReverseReferenceNodeBalancoAcoes($this, 'balancoacoes', 'reverse_reference', 'fluxograma_item_real_id', 'BalancoAcoes');
				case 'BalancoAcoesDepedencia':
					return new QQReverseReferenceNodeBalancoAcoesDepedencia($this, 'balancoacoesdepedencia', 'reverse_reference', 'fluxograma_item_real_id');

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