<?php
	/**
	 * The abstract BalancoAcoesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the BalancoAcoes subclass which
	 * extends this BalancoAcoesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the BalancoAcoes class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $OrdemProducaoGradeId the value for intOrdemProducaoGradeId (Not Null)
	 * @property integer $FluxogramaItemRealId the value for intFluxogramaItemRealId (Unique)
	 * @property integer $QuantidadeDisponivel the value for intQuantidadeDisponivel (Not Null)
	 * @property integer $QuantidadeRemetida the value for intQuantidadeRemetida (Not Null)
	 * @property integer $QuantidadeProduzida the value for intQuantidadeProduzida (Not Null)
	 * @property OrdemProducaoGrade $OrdemProducaoGrade the value for the OrdemProducaoGrade object referenced by intOrdemProducaoGradeId (Not Null)
	 * @property FluxogramaItemReal $FluxogramaItemReal the value for the FluxogramaItemReal object referenced by intFluxogramaItemRealId (Unique)
	 * @property BalancoAcoesDepedencia $_BalancoAcoesDepedencia the value for the private _objBalancoAcoesDepedencia (Read-Only) if set due to an expansion on the balanco_acoes_depedencia.balanco_acoes_id reverse relationship
	 * @property BalancoAcoesDepedencia[] $_BalancoAcoesDepedenciaArray the value for the private _objBalancoAcoesDepedenciaArray (Read-Only) if set due to an ExpandAsArray on the balanco_acoes_depedencia.balanco_acoes_id reverse relationship
	 * @property CostureiraProducao $_CostureiraProducao the value for the private _objCostureiraProducao (Read-Only) if set due to an expansion on the costureira_producao.balanco_acoes_id reverse relationship
	 * @property CostureiraProducao[] $_CostureiraProducaoArray the value for the private _objCostureiraProducaoArray (Read-Only) if set due to an ExpandAsArray on the costureira_producao.balanco_acoes_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class BalancoAcoesGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column balanco_acoes.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column balanco_acoes.ordem_producao_grade_id
		 * @var integer intOrdemProducaoGradeId
		 */
		protected $intOrdemProducaoGradeId;
		const OrdemProducaoGradeIdDefault = null;


		/**
		 * Protected member variable that maps to the database column balanco_acoes.fluxograma_item_real_id
		 * @var integer intFluxogramaItemRealId
		 */
		protected $intFluxogramaItemRealId;
		const FluxogramaItemRealIdDefault = null;


		/**
		 * Protected member variable that maps to the database column balanco_acoes.quantidade_disponivel
		 * @var integer intQuantidadeDisponivel
		 */
		protected $intQuantidadeDisponivel;
		const QuantidadeDisponivelDefault = null;


		/**
		 * Protected member variable that maps to the database column balanco_acoes.quantidade_remetida
		 * @var integer intQuantidadeRemetida
		 */
		protected $intQuantidadeRemetida;
		const QuantidadeRemetidaDefault = null;


		/**
		 * Protected member variable that maps to the database column balanco_acoes.quantidade_produzida
		 * @var integer intQuantidadeProduzida
		 */
		protected $intQuantidadeProduzida;
		const QuantidadeProduzidaDefault = null;


		/**
		 * Private member variable that stores a reference to a single BalancoAcoesDepedencia object
		 * (of type BalancoAcoesDepedencia), if this BalancoAcoes object was restored with
		 * an expansion on the balanco_acoes_depedencia association table.
		 * @var BalancoAcoesDepedencia _objBalancoAcoesDepedencia;
		 */
		private $_objBalancoAcoesDepedencia;

		/**
		 * Private member variable that stores a reference to an array of BalancoAcoesDepedencia objects
		 * (of type BalancoAcoesDepedencia[]), if this BalancoAcoes object was restored with
		 * an ExpandAsArray on the balanco_acoes_depedencia association table.
		 * @var BalancoAcoesDepedencia[] _objBalancoAcoesDepedenciaArray;
		 */
		private $_objBalancoAcoesDepedenciaArray = array();

		/**
		 * Private member variable that stores a reference to a single CostureiraProducao object
		 * (of type CostureiraProducao), if this BalancoAcoes object was restored with
		 * an expansion on the costureira_producao association table.
		 * @var CostureiraProducao _objCostureiraProducao;
		 */
		private $_objCostureiraProducao;

		/**
		 * Private member variable that stores a reference to an array of CostureiraProducao objects
		 * (of type CostureiraProducao[]), if this BalancoAcoes object was restored with
		 * an ExpandAsArray on the costureira_producao association table.
		 * @var CostureiraProducao[] _objCostureiraProducaoArray;
		 */
		private $_objCostureiraProducaoArray = array();

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
		 * in the database column balanco_acoes.ordem_producao_grade_id.
		 *
		 * NOTE: Always use the OrdemProducaoGrade property getter to correctly retrieve this OrdemProducaoGrade object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var OrdemProducaoGrade objOrdemProducaoGrade
		 */
		protected $objOrdemProducaoGrade;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column balanco_acoes.fluxograma_item_real_id.
		 *
		 * NOTE: Always use the FluxogramaItemReal property getter to correctly retrieve this FluxogramaItemReal object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var FluxogramaItemReal objFluxogramaItemReal
		 */
		protected $objFluxogramaItemReal;





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
		 * Load a BalancoAcoes from PK Info
		 * @param integer $intId
		 * @return BalancoAcoes
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return BalancoAcoes::QuerySingle(
				QQ::Equal(QQN::BalancoAcoes()->Id, $intId)
			);
		}

		/**
		 * Load all BalancoAcoeses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return BalancoAcoes[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call BalancoAcoes::QueryArray to perform the LoadAll query
			try {
				return BalancoAcoes::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all BalancoAcoeses
		 * @return int
		 */
		public static function CountAll() {
			// Call BalancoAcoes::QueryCount to perform the CountAll query
			return BalancoAcoes::QueryCount(QQ::All());
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
			$objDatabase = BalancoAcoes::GetDatabase();

			// Create/Build out the QueryBuilder object with BalancoAcoes-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'balanco_acoes');
			BalancoAcoes::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('balanco_acoes');

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
		 * Static Qcodo Query method to query for a single BalancoAcoes object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return BalancoAcoes the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = BalancoAcoes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new BalancoAcoes object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = BalancoAcoes::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return BalancoAcoes::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of BalancoAcoes objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return BalancoAcoes[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = BalancoAcoes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return BalancoAcoes::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = BalancoAcoes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of BalancoAcoes objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = BalancoAcoes::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = BalancoAcoes::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'balanco_acoes_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with BalancoAcoes-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				BalancoAcoes::GetSelectFields($objQueryBuilder);
				BalancoAcoes::GetFromFields($objQueryBuilder);

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
			return BalancoAcoes::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this BalancoAcoes
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'balanco_acoes';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'ordem_producao_grade_id', $strAliasPrefix . 'ordem_producao_grade_id');
			$objBuilder->AddSelectItem($strTableName, 'fluxograma_item_real_id', $strAliasPrefix . 'fluxograma_item_real_id');
			$objBuilder->AddSelectItem($strTableName, 'quantidade_disponivel', $strAliasPrefix . 'quantidade_disponivel');
			$objBuilder->AddSelectItem($strTableName, 'quantidade_remetida', $strAliasPrefix . 'quantidade_remetida');
			$objBuilder->AddSelectItem($strTableName, 'quantidade_produzida', $strAliasPrefix . 'quantidade_produzida');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a BalancoAcoes from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this BalancoAcoes::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return BalancoAcoes
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
					$strAliasPrefix = 'balanco_acoes__';


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

				$strAlias = $strAliasPrefix . 'costureiraproducao__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objCostureiraProducaoArray)) {
						$objPreviousChildItem = $objPreviousItem->_objCostureiraProducaoArray[$intPreviousChildItemCount - 1];
						$objChildItem = CostureiraProducao::InstantiateDbRow($objDbRow, $strAliasPrefix . 'costureiraproducao__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objCostureiraProducaoArray[] = $objChildItem;
					} else
						$objPreviousItem->_objCostureiraProducaoArray[] = CostureiraProducao::InstantiateDbRow($objDbRow, $strAliasPrefix . 'costureiraproducao__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'balanco_acoes__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the BalancoAcoes object
			$objToReturn = new BalancoAcoes();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'ordem_producao_grade_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ordem_producao_grade_id'] : $strAliasPrefix . 'ordem_producao_grade_id';
			$objToReturn->intOrdemProducaoGradeId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fluxograma_item_real_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fluxograma_item_real_id'] : $strAliasPrefix . 'fluxograma_item_real_id';
			$objToReturn->intFluxogramaItemRealId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'quantidade_disponivel', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantidade_disponivel'] : $strAliasPrefix . 'quantidade_disponivel';
			$objToReturn->intQuantidadeDisponivel = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'quantidade_remetida', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantidade_remetida'] : $strAliasPrefix . 'quantidade_remetida';
			$objToReturn->intQuantidadeRemetida = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'quantidade_produzida', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantidade_produzida'] : $strAliasPrefix . 'quantidade_produzida';
			$objToReturn->intQuantidadeProduzida = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'balanco_acoes__';

			// Check for OrdemProducaoGrade Early Binding
			$strAlias = $strAliasPrefix . 'ordem_producao_grade_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objOrdemProducaoGrade = OrdemProducaoGrade::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ordem_producao_grade_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FluxogramaItemReal Early Binding
			$strAlias = $strAliasPrefix . 'fluxograma_item_real_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFluxogramaItemReal = FluxogramaItemReal::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fluxograma_item_real_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for BalancoAcoesDepedencia Virtual Binding
			$strAlias = $strAliasPrefix . 'balancoacoesdepedencia__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objBalancoAcoesDepedenciaArray[] = BalancoAcoesDepedencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoesdepedencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objBalancoAcoesDepedencia = BalancoAcoesDepedencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoesdepedencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for CostureiraProducao Virtual Binding
			$strAlias = $strAliasPrefix . 'costureiraproducao__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objCostureiraProducaoArray[] = CostureiraProducao::InstantiateDbRow($objDbRow, $strAliasPrefix . 'costureiraproducao__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCostureiraProducao = CostureiraProducao::InstantiateDbRow($objDbRow, $strAliasPrefix . 'costureiraproducao__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of BalancoAcoeses from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return BalancoAcoes[]
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
					$objItem = BalancoAcoes::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = BalancoAcoes::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single BalancoAcoes object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return BalancoAcoes next row resulting from the query
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
			return BalancoAcoes::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single BalancoAcoes object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return BalancoAcoes
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return BalancoAcoes::QuerySingle(
				QQ::Equal(QQN::BalancoAcoes()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load a single BalancoAcoes object,
		 * by FluxogramaItemRealId Index(es)
		 * @param integer $intFluxogramaItemRealId
		 * @return BalancoAcoes
		*/
		public static function LoadByFluxogramaItemRealId($intFluxogramaItemRealId, $objOptionalClauses = null) {
			return BalancoAcoes::QuerySingle(
				QQ::Equal(QQN::BalancoAcoes()->FluxogramaItemRealId, $intFluxogramaItemRealId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of BalancoAcoes objects,
		 * by OrdemProducaoGradeId Index(es)
		 * @param integer $intOrdemProducaoGradeId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return BalancoAcoes[]
		*/
		public static function LoadArrayByOrdemProducaoGradeId($intOrdemProducaoGradeId, $objOptionalClauses = null) {
			// Call BalancoAcoes::QueryArray to perform the LoadArrayByOrdemProducaoGradeId query
			try {
				return BalancoAcoes::QueryArray(
					QQ::Equal(QQN::BalancoAcoes()->OrdemProducaoGradeId, $intOrdemProducaoGradeId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count BalancoAcoeses
		 * by OrdemProducaoGradeId Index(es)
		 * @param integer $intOrdemProducaoGradeId
		 * @return int
		*/
		public static function CountByOrdemProducaoGradeId($intOrdemProducaoGradeId, $objOptionalClauses = null) {
			// Call BalancoAcoes::QueryCount to perform the CountByOrdemProducaoGradeId query
			return BalancoAcoes::QueryCount(
				QQ::Equal(QQN::BalancoAcoes()->OrdemProducaoGradeId, $intOrdemProducaoGradeId)
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
		 * Save this BalancoAcoes
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = BalancoAcoes::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `balanco_acoes` (
							`ordem_producao_grade_id`,
							`fluxograma_item_real_id`,
							`quantidade_disponivel`,
							`quantidade_remetida`,
							`quantidade_produzida`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intOrdemProducaoGradeId) . ',
							' . $objDatabase->SqlVariable($this->intFluxogramaItemRealId) . ',
							' . $objDatabase->SqlVariable($this->intQuantidadeDisponivel) . ',
							' . $objDatabase->SqlVariable($this->intQuantidadeRemetida) . ',
							' . $objDatabase->SqlVariable($this->intQuantidadeProduzida) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('balanco_acoes', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`balanco_acoes`
						SET
							`ordem_producao_grade_id` = ' . $objDatabase->SqlVariable($this->intOrdemProducaoGradeId) . ',
							`fluxograma_item_real_id` = ' . $objDatabase->SqlVariable($this->intFluxogramaItemRealId) . ',
							`quantidade_disponivel` = ' . $objDatabase->SqlVariable($this->intQuantidadeDisponivel) . ',
							`quantidade_remetida` = ' . $objDatabase->SqlVariable($this->intQuantidadeRemetida) . ',
							`quantidade_produzida` = ' . $objDatabase->SqlVariable($this->intQuantidadeProduzida) . '
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
		 * Delete this BalancoAcoes
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this BalancoAcoes with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = BalancoAcoes::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_acoes`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all BalancoAcoeses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = BalancoAcoes::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_acoes`');
		}

		/**
		 * Truncate balanco_acoes table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = BalancoAcoes::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `balanco_acoes`');
		}

		/**
		 * Reload this BalancoAcoes from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved BalancoAcoes object.');

			// Reload the Object
			$objReloaded = BalancoAcoes::Load($this->intId);

			// Update $this's local variables to match
			$this->OrdemProducaoGradeId = $objReloaded->OrdemProducaoGradeId;
			$this->FluxogramaItemRealId = $objReloaded->FluxogramaItemRealId;
			$this->intQuantidadeDisponivel = $objReloaded->intQuantidadeDisponivel;
			$this->intQuantidadeRemetida = $objReloaded->intQuantidadeRemetida;
			$this->intQuantidadeProduzida = $objReloaded->intQuantidadeProduzida;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = BalancoAcoes::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `balanco_acoes` (
					`id`,
					`ordem_producao_grade_id`,
					`fluxograma_item_real_id`,
					`quantidade_disponivel`,
					`quantidade_remetida`,
					`quantidade_produzida`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intOrdemProducaoGradeId) . ',
					' . $objDatabase->SqlVariable($this->intFluxogramaItemRealId) . ',
					' . $objDatabase->SqlVariable($this->intQuantidadeDisponivel) . ',
					' . $objDatabase->SqlVariable($this->intQuantidadeRemetida) . ',
					' . $objDatabase->SqlVariable($this->intQuantidadeProduzida) . ',
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
		 * @return BalancoAcoes[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = BalancoAcoes::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM balanco_acoes WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return BalancoAcoes::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return BalancoAcoes[]
		 */
		public function GetJournal() {
			return BalancoAcoes::GetJournalForId($this->intId);
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

				case 'OrdemProducaoGradeId':
					// Gets the value for intOrdemProducaoGradeId (Not Null)
					// @return integer
					return $this->intOrdemProducaoGradeId;

				case 'FluxogramaItemRealId':
					// Gets the value for intFluxogramaItemRealId (Unique)
					// @return integer
					return $this->intFluxogramaItemRealId;

				case 'QuantidadeDisponivel':
					// Gets the value for intQuantidadeDisponivel (Not Null)
					// @return integer
					return $this->intQuantidadeDisponivel;

				case 'QuantidadeRemetida':
					// Gets the value for intQuantidadeRemetida (Not Null)
					// @return integer
					return $this->intQuantidadeRemetida;

				case 'QuantidadeProduzida':
					// Gets the value for intQuantidadeProduzida (Not Null)
					// @return integer
					return $this->intQuantidadeProduzida;


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

				case 'FluxogramaItemReal':
					// Gets the value for the FluxogramaItemReal object referenced by intFluxogramaItemRealId (Unique)
					// @return FluxogramaItemReal
					try {
						if ((!$this->objFluxogramaItemReal) && (!is_null($this->intFluxogramaItemRealId)))
							$this->objFluxogramaItemReal = FluxogramaItemReal::Load($this->intFluxogramaItemRealId);
						return $this->objFluxogramaItemReal;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_BalancoAcoesDepedencia':
					// Gets the value for the private _objBalancoAcoesDepedencia (Read-Only)
					// if set due to an expansion on the balanco_acoes_depedencia.balanco_acoes_id reverse relationship
					// @return BalancoAcoesDepedencia
					return $this->_objBalancoAcoesDepedencia;

				case '_BalancoAcoesDepedenciaArray':
					// Gets the value for the private _objBalancoAcoesDepedenciaArray (Read-Only)
					// if set due to an ExpandAsArray on the balanco_acoes_depedencia.balanco_acoes_id reverse relationship
					// @return BalancoAcoesDepedencia[]
					return (array) $this->_objBalancoAcoesDepedenciaArray;

				case '_CostureiraProducao':
					// Gets the value for the private _objCostureiraProducao (Read-Only)
					// if set due to an expansion on the costureira_producao.balanco_acoes_id reverse relationship
					// @return CostureiraProducao
					return $this->_objCostureiraProducao;

				case '_CostureiraProducaoArray':
					// Gets the value for the private _objCostureiraProducaoArray (Read-Only)
					// if set due to an ExpandAsArray on the costureira_producao.balanco_acoes_id reverse relationship
					// @return CostureiraProducao[]
					return (array) $this->_objCostureiraProducaoArray;


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

				case 'FluxogramaItemRealId':
					// Sets the value for intFluxogramaItemRealId (Unique)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objFluxogramaItemReal = null;
						return ($this->intFluxogramaItemRealId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'QuantidadeDisponivel':
					// Sets the value for intQuantidadeDisponivel (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intQuantidadeDisponivel = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'QuantidadeRemetida':
					// Sets the value for intQuantidadeRemetida (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intQuantidadeRemetida = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'QuantidadeProduzida':
					// Sets the value for intQuantidadeProduzida (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intQuantidadeProduzida = QType::Cast($mixValue, QType::Integer));
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
							throw new QCallerException('Unable to set an unsaved OrdemProducaoGrade for this BalancoAcoes');

						// Update Local Member Variables
						$this->objOrdemProducaoGrade = $mixValue;
						$this->intOrdemProducaoGradeId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'FluxogramaItemReal':
					// Sets the value for the FluxogramaItemReal object referenced by intFluxogramaItemRealId (Unique)
					// @param FluxogramaItemReal $mixValue
					// @return FluxogramaItemReal
					if (is_null($mixValue)) {
						$this->intFluxogramaItemRealId = null;
						$this->objFluxogramaItemReal = null;
						return null;
					} else {
						// Make sure $mixValue actually is a FluxogramaItemReal object
						try {
							$mixValue = QType::Cast($mixValue, 'FluxogramaItemReal');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED FluxogramaItemReal object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved FluxogramaItemReal for this BalancoAcoes');

						// Update Local Member Variables
						$this->objFluxogramaItemReal = $mixValue;
						$this->intFluxogramaItemRealId = $mixValue->Id;

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
				return BalancoAcoesDepedencia::LoadArrayByBalancoAcoesId($this->intId, $objOptionalClauses);
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

			return BalancoAcoesDepedencia::CountByBalancoAcoesId($this->intId);
		}

		/**
		 * Associates a BalancoAcoesDepedencia
		 * @param BalancoAcoesDepedencia $objBalancoAcoesDepedencia
		 * @return void
		*/ 
		public function AssociateBalancoAcoesDepedencia(BalancoAcoesDepedencia $objBalancoAcoesDepedencia) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBalancoAcoesDepedencia on this unsaved BalancoAcoes.');
			if ((is_null($objBalancoAcoesDepedencia->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBalancoAcoesDepedencia on this BalancoAcoes with an unsaved BalancoAcoesDepedencia.');

			// Get the Database Object for this Class
			$objDatabase = BalancoAcoes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balanco_acoes_depedencia`
				SET
					`balanco_acoes_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objBalancoAcoesDepedencia->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objBalancoAcoesDepedencia->BalancoAcoesId = $this->intId;
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesDepedencia on this unsaved BalancoAcoes.');
			if ((is_null($objBalancoAcoesDepedencia->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesDepedencia on this BalancoAcoes with an unsaved BalancoAcoesDepedencia.');

			// Get the Database Object for this Class
			$objDatabase = BalancoAcoes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balanco_acoes_depedencia`
				SET
					`balanco_acoes_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objBalancoAcoesDepedencia->Id) . ' AND
					`balanco_acoes_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objBalancoAcoesDepedencia->BalancoAcoesId = null;
				$objBalancoAcoesDepedencia->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all BalancoAcoesDepedencias
		 * @return void
		*/ 
		public function UnassociateAllBalancoAcoesDepedencias() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesDepedencia on this unsaved BalancoAcoes.');

			// Get the Database Object for this Class
			$objDatabase = BalancoAcoes::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (BalancoAcoesDepedencia::LoadArrayByBalancoAcoesId($this->intId) as $objBalancoAcoesDepedencia) {
					$objBalancoAcoesDepedencia->BalancoAcoesId = null;
					$objBalancoAcoesDepedencia->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balanco_acoes_depedencia`
				SET
					`balanco_acoes_id` = null
				WHERE
					`balanco_acoes_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated BalancoAcoesDepedencia
		 * @param BalancoAcoesDepedencia $objBalancoAcoesDepedencia
		 * @return void
		*/ 
		public function DeleteAssociatedBalancoAcoesDepedencia(BalancoAcoesDepedencia $objBalancoAcoesDepedencia) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesDepedencia on this unsaved BalancoAcoes.');
			if ((is_null($objBalancoAcoesDepedencia->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesDepedencia on this BalancoAcoes with an unsaved BalancoAcoesDepedencia.');

			// Get the Database Object for this Class
			$objDatabase = BalancoAcoes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_acoes_depedencia`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objBalancoAcoesDepedencia->Id) . ' AND
					`balanco_acoes_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesDepedencia on this unsaved BalancoAcoes.');

			// Get the Database Object for this Class
			$objDatabase = BalancoAcoes::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (BalancoAcoesDepedencia::LoadArrayByBalancoAcoesId($this->intId) as $objBalancoAcoesDepedencia) {
					$objBalancoAcoesDepedencia->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_acoes_depedencia`
				WHERE
					`balanco_acoes_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

			
		
		// Related Objects' Methods for CostureiraProducao
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CostureiraProducaos as an array of CostureiraProducao objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CostureiraProducao[]
		*/ 
		public function GetCostureiraProducaoArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return CostureiraProducao::LoadArrayByBalancoAcoesId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CostureiraProducaos
		 * @return int
		*/ 
		public function CountCostureiraProducaos() {
			if ((is_null($this->intId)))
				return 0;

			return CostureiraProducao::CountByBalancoAcoesId($this->intId);
		}

		/**
		 * Associates a CostureiraProducao
		 * @param CostureiraProducao $objCostureiraProducao
		 * @return void
		*/ 
		public function AssociateCostureiraProducao(CostureiraProducao $objCostureiraProducao) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCostureiraProducao on this unsaved BalancoAcoes.');
			if ((is_null($objCostureiraProducao->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCostureiraProducao on this BalancoAcoes with an unsaved CostureiraProducao.');

			// Get the Database Object for this Class
			$objDatabase = BalancoAcoes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`costureira_producao`
				SET
					`balanco_acoes_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objCostureiraProducao->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objCostureiraProducao->BalancoAcoesId = $this->intId;
				$objCostureiraProducao->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a CostureiraProducao
		 * @param CostureiraProducao $objCostureiraProducao
		 * @return void
		*/ 
		public function UnassociateCostureiraProducao(CostureiraProducao $objCostureiraProducao) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCostureiraProducao on this unsaved BalancoAcoes.');
			if ((is_null($objCostureiraProducao->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCostureiraProducao on this BalancoAcoes with an unsaved CostureiraProducao.');

			// Get the Database Object for this Class
			$objDatabase = BalancoAcoes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`costureira_producao`
				SET
					`balanco_acoes_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objCostureiraProducao->Id) . ' AND
					`balanco_acoes_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objCostureiraProducao->BalancoAcoesId = null;
				$objCostureiraProducao->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all CostureiraProducaos
		 * @return void
		*/ 
		public function UnassociateAllCostureiraProducaos() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCostureiraProducao on this unsaved BalancoAcoes.');

			// Get the Database Object for this Class
			$objDatabase = BalancoAcoes::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (CostureiraProducao::LoadArrayByBalancoAcoesId($this->intId) as $objCostureiraProducao) {
					$objCostureiraProducao->BalancoAcoesId = null;
					$objCostureiraProducao->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`costureira_producao`
				SET
					`balanco_acoes_id` = null
				WHERE
					`balanco_acoes_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated CostureiraProducao
		 * @param CostureiraProducao $objCostureiraProducao
		 * @return void
		*/ 
		public function DeleteAssociatedCostureiraProducao(CostureiraProducao $objCostureiraProducao) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCostureiraProducao on this unsaved BalancoAcoes.');
			if ((is_null($objCostureiraProducao->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCostureiraProducao on this BalancoAcoes with an unsaved CostureiraProducao.');

			// Get the Database Object for this Class
			$objDatabase = BalancoAcoes::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`costureira_producao`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objCostureiraProducao->Id) . ' AND
					`balanco_acoes_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objCostureiraProducao->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated CostureiraProducaos
		 * @return void
		*/ 
		public function DeleteAllCostureiraProducaos() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCostureiraProducao on this unsaved BalancoAcoes.');

			// Get the Database Object for this Class
			$objDatabase = BalancoAcoes::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (CostureiraProducao::LoadArrayByBalancoAcoesId($this->intId) as $objCostureiraProducao) {
					$objCostureiraProducao->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`costureira_producao`
				WHERE
					`balanco_acoes_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="BalancoAcoes"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="OrdemProducaoGrade" type="xsd1:OrdemProducaoGrade"/>';
			$strToReturn .= '<element name="FluxogramaItemReal" type="xsd1:FluxogramaItemReal"/>';
			$strToReturn .= '<element name="QuantidadeDisponivel" type="xsd:int"/>';
			$strToReturn .= '<element name="QuantidadeRemetida" type="xsd:int"/>';
			$strToReturn .= '<element name="QuantidadeProduzida" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('BalancoAcoes', $strComplexTypeArray)) {
				$strComplexTypeArray['BalancoAcoes'] = BalancoAcoes::GetSoapComplexTypeXml();
				OrdemProducaoGrade::AlterSoapComplexTypeArray($strComplexTypeArray);
				FluxogramaItemReal::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, BalancoAcoes::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new BalancoAcoes();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'OrdemProducaoGrade')) &&
				($objSoapObject->OrdemProducaoGrade))
				$objToReturn->OrdemProducaoGrade = OrdemProducaoGrade::GetObjectFromSoapObject($objSoapObject->OrdemProducaoGrade);
			if ((property_exists($objSoapObject, 'FluxogramaItemReal')) &&
				($objSoapObject->FluxogramaItemReal))
				$objToReturn->FluxogramaItemReal = FluxogramaItemReal::GetObjectFromSoapObject($objSoapObject->FluxogramaItemReal);
			if (property_exists($objSoapObject, 'QuantidadeDisponivel'))
				$objToReturn->intQuantidadeDisponivel = $objSoapObject->QuantidadeDisponivel;
			if (property_exists($objSoapObject, 'QuantidadeRemetida'))
				$objToReturn->intQuantidadeRemetida = $objSoapObject->QuantidadeRemetida;
			if (property_exists($objSoapObject, 'QuantidadeProduzida'))
				$objToReturn->intQuantidadeProduzida = $objSoapObject->QuantidadeProduzida;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, BalancoAcoes::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objOrdemProducaoGrade)
				$objObject->objOrdemProducaoGrade = OrdemProducaoGrade::GetSoapObjectFromObject($objObject->objOrdemProducaoGrade, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intOrdemProducaoGradeId = null;
			if ($objObject->objFluxogramaItemReal)
				$objObject->objFluxogramaItemReal = FluxogramaItemReal::GetSoapObjectFromObject($objObject->objFluxogramaItemReal, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFluxogramaItemRealId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $OrdemProducaoGradeId
	 * @property-read QQNodeOrdemProducaoGrade $OrdemProducaoGrade
	 * @property-read QQNode $FluxogramaItemRealId
	 * @property-read QQNodeFluxogramaItemReal $FluxogramaItemReal
	 * @property-read QQNode $QuantidadeDisponivel
	 * @property-read QQNode $QuantidadeRemetida
	 * @property-read QQNode $QuantidadeProduzida
	 * @property-read QQReverseReferenceNodeBalancoAcoesDepedencia $BalancoAcoesDepedencia
	 * @property-read QQReverseReferenceNodeCostureiraProducao $CostureiraProducao
	 */
	class QQNodeBalancoAcoes extends QQNode {
		protected $strTableName = 'balanco_acoes';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'BalancoAcoes';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'OrdemProducaoGradeId':
					return new QQNode('ordem_producao_grade_id', 'OrdemProducaoGradeId', 'integer', $this);
				case 'OrdemProducaoGrade':
					return new QQNodeOrdemProducaoGrade('ordem_producao_grade_id', 'OrdemProducaoGrade', 'integer', $this);
				case 'FluxogramaItemRealId':
					return new QQNode('fluxograma_item_real_id', 'FluxogramaItemRealId', 'integer', $this);
				case 'FluxogramaItemReal':
					return new QQNodeFluxogramaItemReal('fluxograma_item_real_id', 'FluxogramaItemReal', 'integer', $this);
				case 'QuantidadeDisponivel':
					return new QQNode('quantidade_disponivel', 'QuantidadeDisponivel', 'integer', $this);
				case 'QuantidadeRemetida':
					return new QQNode('quantidade_remetida', 'QuantidadeRemetida', 'integer', $this);
				case 'QuantidadeProduzida':
					return new QQNode('quantidade_produzida', 'QuantidadeProduzida', 'integer', $this);
				case 'BalancoAcoesDepedencia':
					return new QQReverseReferenceNodeBalancoAcoesDepedencia($this, 'balancoacoesdepedencia', 'reverse_reference', 'balanco_acoes_id');
				case 'CostureiraProducao':
					return new QQReverseReferenceNodeCostureiraProducao($this, 'costureiraproducao', 'reverse_reference', 'balanco_acoes_id');

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
	 * @property-read QQNode $OrdemProducaoGradeId
	 * @property-read QQNodeOrdemProducaoGrade $OrdemProducaoGrade
	 * @property-read QQNode $FluxogramaItemRealId
	 * @property-read QQNodeFluxogramaItemReal $FluxogramaItemReal
	 * @property-read QQNode $QuantidadeDisponivel
	 * @property-read QQNode $QuantidadeRemetida
	 * @property-read QQNode $QuantidadeProduzida
	 * @property-read QQReverseReferenceNodeBalancoAcoesDepedencia $BalancoAcoesDepedencia
	 * @property-read QQReverseReferenceNodeCostureiraProducao $CostureiraProducao
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeBalancoAcoes extends QQReverseReferenceNode {
		protected $strTableName = 'balanco_acoes';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'BalancoAcoes';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'OrdemProducaoGradeId':
					return new QQNode('ordem_producao_grade_id', 'OrdemProducaoGradeId', 'integer', $this);
				case 'OrdemProducaoGrade':
					return new QQNodeOrdemProducaoGrade('ordem_producao_grade_id', 'OrdemProducaoGrade', 'integer', $this);
				case 'FluxogramaItemRealId':
					return new QQNode('fluxograma_item_real_id', 'FluxogramaItemRealId', 'integer', $this);
				case 'FluxogramaItemReal':
					return new QQNodeFluxogramaItemReal('fluxograma_item_real_id', 'FluxogramaItemReal', 'integer', $this);
				case 'QuantidadeDisponivel':
					return new QQNode('quantidade_disponivel', 'QuantidadeDisponivel', 'integer', $this);
				case 'QuantidadeRemetida':
					return new QQNode('quantidade_remetida', 'QuantidadeRemetida', 'integer', $this);
				case 'QuantidadeProduzida':
					return new QQNode('quantidade_produzida', 'QuantidadeProduzida', 'integer', $this);
				case 'BalancoAcoesDepedencia':
					return new QQReverseReferenceNodeBalancoAcoesDepedencia($this, 'balancoacoesdepedencia', 'reverse_reference', 'balanco_acoes_id');
				case 'CostureiraProducao':
					return new QQReverseReferenceNodeCostureiraProducao($this, 'costureiraproducao', 'reverse_reference', 'balanco_acoes_id');

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