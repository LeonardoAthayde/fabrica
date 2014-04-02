<?php
	/**
	 * The abstract CostureiraProducaoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the CostureiraProducao subclass which
	 * extends this CostureiraProducaoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the CostureiraProducao class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $CostureiraId the value for intCostureiraId 
	 * @property integer $BalancoAcoesId the value for intBalancoAcoesId (Not Null)
	 * @property integer $QuantidadePlanejada the value for intQuantidadePlanejada (Not Null)
	 * @property integer $QuantidadeRealizada the value for intQuantidadeRealizada 
	 * @property integer $QuantidadeEstocado the value for intQuantidadeEstocado (Not Null)
	 * @property integer $TempoPrevisto the value for intTempoPrevisto 
	 * @property boolean $Concluido the value for blnConcluido (Not Null)
	 * @property Costureira $Costureira the value for the Costureira object referenced by intCostureiraId 
	 * @property BalancoAcoes $BalancoAcoes the value for the BalancoAcoes object referenced by intBalancoAcoesId (Not Null)
	 * @property CostureiraTempo $_CostureiraTempo the value for the private _objCostureiraTempo (Read-Only) if set due to an expansion on the costureira_tempo.costureira_producao_id reverse relationship
	 * @property CostureiraTempo[] $_CostureiraTempoArray the value for the private _objCostureiraTempoArray (Read-Only) if set due to an ExpandAsArray on the costureira_tempo.costureira_producao_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CostureiraProducaoGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column costureira_producao.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column costureira_producao.costureira_id
		 * @var integer intCostureiraId
		 */
		protected $intCostureiraId;
		const CostureiraIdDefault = null;


		/**
		 * Protected member variable that maps to the database column costureira_producao.balanco_acoes_id
		 * @var integer intBalancoAcoesId
		 */
		protected $intBalancoAcoesId;
		const BalancoAcoesIdDefault = null;


		/**
		 * Protected member variable that maps to the database column costureira_producao.quantidade_planejada
		 * @var integer intQuantidadePlanejada
		 */
		protected $intQuantidadePlanejada;
		const QuantidadePlanejadaDefault = null;


		/**
		 * Protected member variable that maps to the database column costureira_producao.quantidade_realizada
		 * @var integer intQuantidadeRealizada
		 */
		protected $intQuantidadeRealizada;
		const QuantidadeRealizadaDefault = null;


		/**
		 * Protected member variable that maps to the database column costureira_producao.quantidade_estocado
		 * @var integer intQuantidadeEstocado
		 */
		protected $intQuantidadeEstocado;
		const QuantidadeEstocadoDefault = null;


		/**
		 * Protected member variable that maps to the database column costureira_producao.tempo_previsto
		 * @var integer intTempoPrevisto
		 */
		protected $intTempoPrevisto;
		const TempoPrevistoDefault = null;


		/**
		 * Protected member variable that maps to the database column costureira_producao.concluido
		 * @var boolean blnConcluido
		 */
		protected $blnConcluido;
		const ConcluidoDefault = null;


		/**
		 * Private member variable that stores a reference to a single CostureiraTempo object
		 * (of type CostureiraTempo), if this CostureiraProducao object was restored with
		 * an expansion on the costureira_tempo association table.
		 * @var CostureiraTempo _objCostureiraTempo;
		 */
		private $_objCostureiraTempo;

		/**
		 * Private member variable that stores a reference to an array of CostureiraTempo objects
		 * (of type CostureiraTempo[]), if this CostureiraProducao object was restored with
		 * an ExpandAsArray on the costureira_tempo association table.
		 * @var CostureiraTempo[] _objCostureiraTempoArray;
		 */
		private $_objCostureiraTempoArray = array();

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
		 * in the database column costureira_producao.costureira_id.
		 *
		 * NOTE: Always use the Costureira property getter to correctly retrieve this Costureira object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Costureira objCostureira
		 */
		protected $objCostureira;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column costureira_producao.balanco_acoes_id.
		 *
		 * NOTE: Always use the BalancoAcoes property getter to correctly retrieve this BalancoAcoes object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var BalancoAcoes objBalancoAcoes
		 */
		protected $objBalancoAcoes;





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
		 * Load a CostureiraProducao from PK Info
		 * @param integer $intId
		 * @return CostureiraProducao
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return CostureiraProducao::QuerySingle(
				QQ::Equal(QQN::CostureiraProducao()->Id, $intId)
			);
		}

		/**
		 * Load all CostureiraProducaos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CostureiraProducao[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call CostureiraProducao::QueryArray to perform the LoadAll query
			try {
				return CostureiraProducao::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all CostureiraProducaos
		 * @return int
		 */
		public static function CountAll() {
			// Call CostureiraProducao::QueryCount to perform the CountAll query
			return CostureiraProducao::QueryCount(QQ::All());
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
			$objDatabase = CostureiraProducao::GetDatabase();

			// Create/Build out the QueryBuilder object with CostureiraProducao-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'costureira_producao');
			CostureiraProducao::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('costureira_producao');

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
		 * Static Qcodo Query method to query for a single CostureiraProducao object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CostureiraProducao the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CostureiraProducao::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new CostureiraProducao object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = CostureiraProducao::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return CostureiraProducao::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of CostureiraProducao objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CostureiraProducao[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CostureiraProducao::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return CostureiraProducao::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = CostureiraProducao::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of CostureiraProducao objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CostureiraProducao::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = CostureiraProducao::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'costureira_producao_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with CostureiraProducao-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				CostureiraProducao::GetSelectFields($objQueryBuilder);
				CostureiraProducao::GetFromFields($objQueryBuilder);

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
			return CostureiraProducao::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this CostureiraProducao
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'costureira_producao';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'costureira_id', $strAliasPrefix . 'costureira_id');
			$objBuilder->AddSelectItem($strTableName, 'balanco_acoes_id', $strAliasPrefix . 'balanco_acoes_id');
			$objBuilder->AddSelectItem($strTableName, 'quantidade_planejada', $strAliasPrefix . 'quantidade_planejada');
			$objBuilder->AddSelectItem($strTableName, 'quantidade_realizada', $strAliasPrefix . 'quantidade_realizada');
			$objBuilder->AddSelectItem($strTableName, 'quantidade_estocado', $strAliasPrefix . 'quantidade_estocado');
			$objBuilder->AddSelectItem($strTableName, 'tempo_previsto', $strAliasPrefix . 'tempo_previsto');
			$objBuilder->AddSelectItem($strTableName, 'concluido', $strAliasPrefix . 'concluido');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a CostureiraProducao from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this CostureiraProducao::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return CostureiraProducao
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
					$strAliasPrefix = 'costureira_producao__';


				$strAlias = $strAliasPrefix . 'costureiratempo__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objCostureiraTempoArray)) {
						$objPreviousChildItem = $objPreviousItem->_objCostureiraTempoArray[$intPreviousChildItemCount - 1];
						$objChildItem = CostureiraTempo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'costureiratempo__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objCostureiraTempoArray[] = $objChildItem;
					} else
						$objPreviousItem->_objCostureiraTempoArray[] = CostureiraTempo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'costureiratempo__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'costureira_producao__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the CostureiraProducao object
			$objToReturn = new CostureiraProducao();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'costureira_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'costureira_id'] : $strAliasPrefix . 'costureira_id';
			$objToReturn->intCostureiraId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'balanco_acoes_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'balanco_acoes_id'] : $strAliasPrefix . 'balanco_acoes_id';
			$objToReturn->intBalancoAcoesId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'quantidade_planejada', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantidade_planejada'] : $strAliasPrefix . 'quantidade_planejada';
			$objToReturn->intQuantidadePlanejada = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'quantidade_realizada', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantidade_realizada'] : $strAliasPrefix . 'quantidade_realizada';
			$objToReturn->intQuantidadeRealizada = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'quantidade_estocado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantidade_estocado'] : $strAliasPrefix . 'quantidade_estocado';
			$objToReturn->intQuantidadeEstocado = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'tempo_previsto', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tempo_previsto'] : $strAliasPrefix . 'tempo_previsto';
			$objToReturn->intTempoPrevisto = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'concluido', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'concluido'] : $strAliasPrefix . 'concluido';
			$objToReturn->blnConcluido = $objDbRow->GetColumn($strAliasName, 'Bit');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'costureira_producao__';

			// Check for Costureira Early Binding
			$strAlias = $strAliasPrefix . 'costureira_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCostureira = Costureira::InstantiateDbRow($objDbRow, $strAliasPrefix . 'costureira_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for BalancoAcoes Early Binding
			$strAlias = $strAliasPrefix . 'balanco_acoes_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objBalancoAcoes = BalancoAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balanco_acoes_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for CostureiraTempo Virtual Binding
			$strAlias = $strAliasPrefix . 'costureiratempo__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objCostureiraTempoArray[] = CostureiraTempo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'costureiratempo__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCostureiraTempo = CostureiraTempo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'costureiratempo__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of CostureiraProducaos from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return CostureiraProducao[]
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
					$objItem = CostureiraProducao::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = CostureiraProducao::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single CostureiraProducao object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return CostureiraProducao next row resulting from the query
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
			return CostureiraProducao::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single CostureiraProducao object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return CostureiraProducao
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return CostureiraProducao::QuerySingle(
				QQ::Equal(QQN::CostureiraProducao()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of CostureiraProducao objects,
		 * by CostureiraId Index(es)
		 * @param integer $intCostureiraId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CostureiraProducao[]
		*/
		public static function LoadArrayByCostureiraId($intCostureiraId, $objOptionalClauses = null) {
			// Call CostureiraProducao::QueryArray to perform the LoadArrayByCostureiraId query
			try {
				return CostureiraProducao::QueryArray(
					QQ::Equal(QQN::CostureiraProducao()->CostureiraId, $intCostureiraId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CostureiraProducaos
		 * by CostureiraId Index(es)
		 * @param integer $intCostureiraId
		 * @return int
		*/
		public static function CountByCostureiraId($intCostureiraId, $objOptionalClauses = null) {
			// Call CostureiraProducao::QueryCount to perform the CountByCostureiraId query
			return CostureiraProducao::QueryCount(
				QQ::Equal(QQN::CostureiraProducao()->CostureiraId, $intCostureiraId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of CostureiraProducao objects,
		 * by BalancoAcoesId Index(es)
		 * @param integer $intBalancoAcoesId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CostureiraProducao[]
		*/
		public static function LoadArrayByBalancoAcoesId($intBalancoAcoesId, $objOptionalClauses = null) {
			// Call CostureiraProducao::QueryArray to perform the LoadArrayByBalancoAcoesId query
			try {
				return CostureiraProducao::QueryArray(
					QQ::Equal(QQN::CostureiraProducao()->BalancoAcoesId, $intBalancoAcoesId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CostureiraProducaos
		 * by BalancoAcoesId Index(es)
		 * @param integer $intBalancoAcoesId
		 * @return int
		*/
		public static function CountByBalancoAcoesId($intBalancoAcoesId, $objOptionalClauses = null) {
			// Call CostureiraProducao::QueryCount to perform the CountByBalancoAcoesId query
			return CostureiraProducao::QueryCount(
				QQ::Equal(QQN::CostureiraProducao()->BalancoAcoesId, $intBalancoAcoesId)
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
		 * Save this CostureiraProducao
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = CostureiraProducao::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `costureira_producao` (
							`costureira_id`,
							`balanco_acoes_id`,
							`quantidade_planejada`,
							`quantidade_realizada`,
							`quantidade_estocado`,
							`tempo_previsto`,
							`concluido`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intCostureiraId) . ',
							' . $objDatabase->SqlVariable($this->intBalancoAcoesId) . ',
							' . $objDatabase->SqlVariable($this->intQuantidadePlanejada) . ',
							' . $objDatabase->SqlVariable($this->intQuantidadeRealizada) . ',
							' . $objDatabase->SqlVariable($this->intQuantidadeEstocado) . ',
							' . $objDatabase->SqlVariable($this->intTempoPrevisto) . ',
							' . $objDatabase->SqlVariable($this->blnConcluido) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('costureira_producao', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`costureira_producao`
						SET
							`costureira_id` = ' . $objDatabase->SqlVariable($this->intCostureiraId) . ',
							`balanco_acoes_id` = ' . $objDatabase->SqlVariable($this->intBalancoAcoesId) . ',
							`quantidade_planejada` = ' . $objDatabase->SqlVariable($this->intQuantidadePlanejada) . ',
							`quantidade_realizada` = ' . $objDatabase->SqlVariable($this->intQuantidadeRealizada) . ',
							`quantidade_estocado` = ' . $objDatabase->SqlVariable($this->intQuantidadeEstocado) . ',
							`tempo_previsto` = ' . $objDatabase->SqlVariable($this->intTempoPrevisto) . ',
							`concluido` = ' . $objDatabase->SqlVariable($this->blnConcluido) . '
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
		 * Delete this CostureiraProducao
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this CostureiraProducao with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = CostureiraProducao::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`costureira_producao`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all CostureiraProducaos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = CostureiraProducao::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`costureira_producao`');
		}

		/**
		 * Truncate costureira_producao table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = CostureiraProducao::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `costureira_producao`');
		}

		/**
		 * Reload this CostureiraProducao from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved CostureiraProducao object.');

			// Reload the Object
			$objReloaded = CostureiraProducao::Load($this->intId);

			// Update $this's local variables to match
			$this->CostureiraId = $objReloaded->CostureiraId;
			$this->BalancoAcoesId = $objReloaded->BalancoAcoesId;
			$this->intQuantidadePlanejada = $objReloaded->intQuantidadePlanejada;
			$this->intQuantidadeRealizada = $objReloaded->intQuantidadeRealizada;
			$this->intQuantidadeEstocado = $objReloaded->intQuantidadeEstocado;
			$this->intTempoPrevisto = $objReloaded->intTempoPrevisto;
			$this->blnConcluido = $objReloaded->blnConcluido;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = CostureiraProducao::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `costureira_producao` (
					`id`,
					`costureira_id`,
					`balanco_acoes_id`,
					`quantidade_planejada`,
					`quantidade_realizada`,
					`quantidade_estocado`,
					`tempo_previsto`,
					`concluido`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intCostureiraId) . ',
					' . $objDatabase->SqlVariable($this->intBalancoAcoesId) . ',
					' . $objDatabase->SqlVariable($this->intQuantidadePlanejada) . ',
					' . $objDatabase->SqlVariable($this->intQuantidadeRealizada) . ',
					' . $objDatabase->SqlVariable($this->intQuantidadeEstocado) . ',
					' . $objDatabase->SqlVariable($this->intTempoPrevisto) . ',
					' . $objDatabase->SqlVariable($this->blnConcluido) . ',
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
		 * @return CostureiraProducao[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = CostureiraProducao::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM costureira_producao WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return CostureiraProducao::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return CostureiraProducao[]
		 */
		public function GetJournal() {
			return CostureiraProducao::GetJournalForId($this->intId);
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

				case 'CostureiraId':
					// Gets the value for intCostureiraId 
					// @return integer
					return $this->intCostureiraId;

				case 'BalancoAcoesId':
					// Gets the value for intBalancoAcoesId (Not Null)
					// @return integer
					return $this->intBalancoAcoesId;

				case 'QuantidadePlanejada':
					// Gets the value for intQuantidadePlanejada (Not Null)
					// @return integer
					return $this->intQuantidadePlanejada;

				case 'QuantidadeRealizada':
					// Gets the value for intQuantidadeRealizada 
					// @return integer
					return $this->intQuantidadeRealizada;

				case 'QuantidadeEstocado':
					// Gets the value for intQuantidadeEstocado (Not Null)
					// @return integer
					return $this->intQuantidadeEstocado;

				case 'TempoPrevisto':
					// Gets the value for intTempoPrevisto 
					// @return integer
					return $this->intTempoPrevisto;

				case 'Concluido':
					// Gets the value for blnConcluido (Not Null)
					// @return boolean
					return $this->blnConcluido;


				///////////////////
				// Member Objects
				///////////////////
				case 'Costureira':
					// Gets the value for the Costureira object referenced by intCostureiraId 
					// @return Costureira
					try {
						if ((!$this->objCostureira) && (!is_null($this->intCostureiraId)))
							$this->objCostureira = Costureira::Load($this->intCostureiraId);
						return $this->objCostureira;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BalancoAcoes':
					// Gets the value for the BalancoAcoes object referenced by intBalancoAcoesId (Not Null)
					// @return BalancoAcoes
					try {
						if ((!$this->objBalancoAcoes) && (!is_null($this->intBalancoAcoesId)))
							$this->objBalancoAcoes = BalancoAcoes::Load($this->intBalancoAcoesId);
						return $this->objBalancoAcoes;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_CostureiraTempo':
					// Gets the value for the private _objCostureiraTempo (Read-Only)
					// if set due to an expansion on the costureira_tempo.costureira_producao_id reverse relationship
					// @return CostureiraTempo
					return $this->_objCostureiraTempo;

				case '_CostureiraTempoArray':
					// Gets the value for the private _objCostureiraTempoArray (Read-Only)
					// if set due to an ExpandAsArray on the costureira_tempo.costureira_producao_id reverse relationship
					// @return CostureiraTempo[]
					return (array) $this->_objCostureiraTempoArray;


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
				case 'CostureiraId':
					// Sets the value for intCostureiraId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objCostureira = null;
						return ($this->intCostureiraId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BalancoAcoesId':
					// Sets the value for intBalancoAcoesId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objBalancoAcoes = null;
						return ($this->intBalancoAcoesId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'QuantidadePlanejada':
					// Sets the value for intQuantidadePlanejada (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intQuantidadePlanejada = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'QuantidadeRealizada':
					// Sets the value for intQuantidadeRealizada 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intQuantidadeRealizada = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'QuantidadeEstocado':
					// Sets the value for intQuantidadeEstocado (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intQuantidadeEstocado = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TempoPrevisto':
					// Sets the value for intTempoPrevisto 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intTempoPrevisto = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Concluido':
					// Sets the value for blnConcluido (Not Null)
					// @param boolean $mixValue
					// @return boolean
					try {
						return ($this->blnConcluido = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Costureira':
					// Sets the value for the Costureira object referenced by intCostureiraId 
					// @param Costureira $mixValue
					// @return Costureira
					if (is_null($mixValue)) {
						$this->intCostureiraId = null;
						$this->objCostureira = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Costureira object
						try {
							$mixValue = QType::Cast($mixValue, 'Costureira');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Costureira object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Costureira for this CostureiraProducao');

						// Update Local Member Variables
						$this->objCostureira = $mixValue;
						$this->intCostureiraId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'BalancoAcoes':
					// Sets the value for the BalancoAcoes object referenced by intBalancoAcoesId (Not Null)
					// @param BalancoAcoes $mixValue
					// @return BalancoAcoes
					if (is_null($mixValue)) {
						$this->intBalancoAcoesId = null;
						$this->objBalancoAcoes = null;
						return null;
					} else {
						// Make sure $mixValue actually is a BalancoAcoes object
						try {
							$mixValue = QType::Cast($mixValue, 'BalancoAcoes');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED BalancoAcoes object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved BalancoAcoes for this CostureiraProducao');

						// Update Local Member Variables
						$this->objBalancoAcoes = $mixValue;
						$this->intBalancoAcoesId = $mixValue->Id;

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

			
		
		// Related Objects' Methods for CostureiraTempo
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CostureiraTempos as an array of CostureiraTempo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CostureiraTempo[]
		*/ 
		public function GetCostureiraTempoArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return CostureiraTempo::LoadArrayByCostureiraProducaoId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CostureiraTempos
		 * @return int
		*/ 
		public function CountCostureiraTempos() {
			if ((is_null($this->intId)))
				return 0;

			return CostureiraTempo::CountByCostureiraProducaoId($this->intId);
		}

		/**
		 * Associates a CostureiraTempo
		 * @param CostureiraTempo $objCostureiraTempo
		 * @return void
		*/ 
		public function AssociateCostureiraTempo(CostureiraTempo $objCostureiraTempo) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCostureiraTempo on this unsaved CostureiraProducao.');
			if ((is_null($objCostureiraTempo->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCostureiraTempo on this CostureiraProducao with an unsaved CostureiraTempo.');

			// Get the Database Object for this Class
			$objDatabase = CostureiraProducao::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`costureira_tempo`
				SET
					`costureira_producao_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objCostureiraTempo->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objCostureiraTempo->CostureiraProducaoId = $this->intId;
				$objCostureiraTempo->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a CostureiraTempo
		 * @param CostureiraTempo $objCostureiraTempo
		 * @return void
		*/ 
		public function UnassociateCostureiraTempo(CostureiraTempo $objCostureiraTempo) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCostureiraTempo on this unsaved CostureiraProducao.');
			if ((is_null($objCostureiraTempo->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCostureiraTempo on this CostureiraProducao with an unsaved CostureiraTempo.');

			// Get the Database Object for this Class
			$objDatabase = CostureiraProducao::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`costureira_tempo`
				SET
					`costureira_producao_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objCostureiraTempo->Id) . ' AND
					`costureira_producao_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objCostureiraTempo->CostureiraProducaoId = null;
				$objCostureiraTempo->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all CostureiraTempos
		 * @return void
		*/ 
		public function UnassociateAllCostureiraTempos() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCostureiraTempo on this unsaved CostureiraProducao.');

			// Get the Database Object for this Class
			$objDatabase = CostureiraProducao::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (CostureiraTempo::LoadArrayByCostureiraProducaoId($this->intId) as $objCostureiraTempo) {
					$objCostureiraTempo->CostureiraProducaoId = null;
					$objCostureiraTempo->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`costureira_tempo`
				SET
					`costureira_producao_id` = null
				WHERE
					`costureira_producao_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated CostureiraTempo
		 * @param CostureiraTempo $objCostureiraTempo
		 * @return void
		*/ 
		public function DeleteAssociatedCostureiraTempo(CostureiraTempo $objCostureiraTempo) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCostureiraTempo on this unsaved CostureiraProducao.');
			if ((is_null($objCostureiraTempo->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCostureiraTempo on this CostureiraProducao with an unsaved CostureiraTempo.');

			// Get the Database Object for this Class
			$objDatabase = CostureiraProducao::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`costureira_tempo`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objCostureiraTempo->Id) . ' AND
					`costureira_producao_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objCostureiraTempo->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated CostureiraTempos
		 * @return void
		*/ 
		public function DeleteAllCostureiraTempos() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCostureiraTempo on this unsaved CostureiraProducao.');

			// Get the Database Object for this Class
			$objDatabase = CostureiraProducao::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (CostureiraTempo::LoadArrayByCostureiraProducaoId($this->intId) as $objCostureiraTempo) {
					$objCostureiraTempo->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`costureira_tempo`
				WHERE
					`costureira_producao_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="CostureiraProducao"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Costureira" type="xsd1:Costureira"/>';
			$strToReturn .= '<element name="BalancoAcoes" type="xsd1:BalancoAcoes"/>';
			$strToReturn .= '<element name="QuantidadePlanejada" type="xsd:int"/>';
			$strToReturn .= '<element name="QuantidadeRealizada" type="xsd:int"/>';
			$strToReturn .= '<element name="QuantidadeEstocado" type="xsd:int"/>';
			$strToReturn .= '<element name="TempoPrevisto" type="xsd:int"/>';
			$strToReturn .= '<element name="Concluido" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('CostureiraProducao', $strComplexTypeArray)) {
				$strComplexTypeArray['CostureiraProducao'] = CostureiraProducao::GetSoapComplexTypeXml();
				Costureira::AlterSoapComplexTypeArray($strComplexTypeArray);
				BalancoAcoes::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, CostureiraProducao::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new CostureiraProducao();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'Costureira')) &&
				($objSoapObject->Costureira))
				$objToReturn->Costureira = Costureira::GetObjectFromSoapObject($objSoapObject->Costureira);
			if ((property_exists($objSoapObject, 'BalancoAcoes')) &&
				($objSoapObject->BalancoAcoes))
				$objToReturn->BalancoAcoes = BalancoAcoes::GetObjectFromSoapObject($objSoapObject->BalancoAcoes);
			if (property_exists($objSoapObject, 'QuantidadePlanejada'))
				$objToReturn->intQuantidadePlanejada = $objSoapObject->QuantidadePlanejada;
			if (property_exists($objSoapObject, 'QuantidadeRealizada'))
				$objToReturn->intQuantidadeRealizada = $objSoapObject->QuantidadeRealizada;
			if (property_exists($objSoapObject, 'QuantidadeEstocado'))
				$objToReturn->intQuantidadeEstocado = $objSoapObject->QuantidadeEstocado;
			if (property_exists($objSoapObject, 'TempoPrevisto'))
				$objToReturn->intTempoPrevisto = $objSoapObject->TempoPrevisto;
			if (property_exists($objSoapObject, 'Concluido'))
				$objToReturn->blnConcluido = $objSoapObject->Concluido;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, CostureiraProducao::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objCostureira)
				$objObject->objCostureira = Costureira::GetSoapObjectFromObject($objObject->objCostureira, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCostureiraId = null;
			if ($objObject->objBalancoAcoes)
				$objObject->objBalancoAcoes = BalancoAcoes::GetSoapObjectFromObject($objObject->objBalancoAcoes, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intBalancoAcoesId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $CostureiraId
	 * @property-read QQNodeCostureira $Costureira
	 * @property-read QQNode $BalancoAcoesId
	 * @property-read QQNodeBalancoAcoes $BalancoAcoes
	 * @property-read QQNode $QuantidadePlanejada
	 * @property-read QQNode $QuantidadeRealizada
	 * @property-read QQNode $QuantidadeEstocado
	 * @property-read QQNode $TempoPrevisto
	 * @property-read QQNode $Concluido
	 * @property-read QQReverseReferenceNodeCostureiraTempo $CostureiraTempo
	 */
	class QQNodeCostureiraProducao extends QQNode {
		protected $strTableName = 'costureira_producao';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'CostureiraProducao';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'CostureiraId':
					return new QQNode('costureira_id', 'CostureiraId', 'integer', $this);
				case 'Costureira':
					return new QQNodeCostureira('costureira_id', 'Costureira', 'integer', $this);
				case 'BalancoAcoesId':
					return new QQNode('balanco_acoes_id', 'BalancoAcoesId', 'integer', $this);
				case 'BalancoAcoes':
					return new QQNodeBalancoAcoes('balanco_acoes_id', 'BalancoAcoes', 'integer', $this);
				case 'QuantidadePlanejada':
					return new QQNode('quantidade_planejada', 'QuantidadePlanejada', 'integer', $this);
				case 'QuantidadeRealizada':
					return new QQNode('quantidade_realizada', 'QuantidadeRealizada', 'integer', $this);
				case 'QuantidadeEstocado':
					return new QQNode('quantidade_estocado', 'QuantidadeEstocado', 'integer', $this);
				case 'TempoPrevisto':
					return new QQNode('tempo_previsto', 'TempoPrevisto', 'integer', $this);
				case 'Concluido':
					return new QQNode('concluido', 'Concluido', 'boolean', $this);
				case 'CostureiraTempo':
					return new QQReverseReferenceNodeCostureiraTempo($this, 'costureiratempo', 'reverse_reference', 'costureira_producao_id');

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
	 * @property-read QQNode $CostureiraId
	 * @property-read QQNodeCostureira $Costureira
	 * @property-read QQNode $BalancoAcoesId
	 * @property-read QQNodeBalancoAcoes $BalancoAcoes
	 * @property-read QQNode $QuantidadePlanejada
	 * @property-read QQNode $QuantidadeRealizada
	 * @property-read QQNode $QuantidadeEstocado
	 * @property-read QQNode $TempoPrevisto
	 * @property-read QQNode $Concluido
	 * @property-read QQReverseReferenceNodeCostureiraTempo $CostureiraTempo
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeCostureiraProducao extends QQReverseReferenceNode {
		protected $strTableName = 'costureira_producao';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'CostureiraProducao';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'CostureiraId':
					return new QQNode('costureira_id', 'CostureiraId', 'integer', $this);
				case 'Costureira':
					return new QQNodeCostureira('costureira_id', 'Costureira', 'integer', $this);
				case 'BalancoAcoesId':
					return new QQNode('balanco_acoes_id', 'BalancoAcoesId', 'integer', $this);
				case 'BalancoAcoes':
					return new QQNodeBalancoAcoes('balanco_acoes_id', 'BalancoAcoes', 'integer', $this);
				case 'QuantidadePlanejada':
					return new QQNode('quantidade_planejada', 'QuantidadePlanejada', 'integer', $this);
				case 'QuantidadeRealizada':
					return new QQNode('quantidade_realizada', 'QuantidadeRealizada', 'integer', $this);
				case 'QuantidadeEstocado':
					return new QQNode('quantidade_estocado', 'QuantidadeEstocado', 'integer', $this);
				case 'TempoPrevisto':
					return new QQNode('tempo_previsto', 'TempoPrevisto', 'integer', $this);
				case 'Concluido':
					return new QQNode('concluido', 'Concluido', 'boolean', $this);
				case 'CostureiraTempo':
					return new QQReverseReferenceNodeCostureiraTempo($this, 'costureiratempo', 'reverse_reference', 'costureira_producao_id');

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