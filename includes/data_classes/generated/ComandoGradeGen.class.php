<?php
	/**
	 * The abstract ComandoGradeGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the ComandoGrade subclass which
	 * extends this ComandoGradeGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the ComandoGrade class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $ReferenciaId the value for intReferenciaId (Not Null)
	 * @property integer $TamanhoId the value for intTamanhoId (Not Null)
	 * @property integer $ComandoTecidoPecaId the value for intComandoTecidoPecaId (Not Null)
	 * @property integer $QuantidadeRisco the value for intQuantidadeRisco (Not Null)
	 * @property boolean $MeiaRisco the value for blnMeiaRisco (Not Null)
	 * @property integer $QuantidadeReal the value for intQuantidadeReal (Not Null)
	 * @property double $Peso the value for fltPeso (Not Null)
	 * @property Referencia $Referencia the value for the Referencia object referenced by intReferenciaId (Not Null)
	 * @property Tamanho $Tamanho the value for the Tamanho object referenced by intTamanhoId (Not Null)
	 * @property ComandoTecidoPeca $ComandoTecidoPeca the value for the ComandoTecidoPeca object referenced by intComandoTecidoPecaId (Not Null)
	 * @property BalancoPecas $BalancoPecasAsOrdemProducaoGrade the value for the BalancoPecas object that uniquely references this ComandoGrade
	 * @property BalancoAcoes $_BalancoAcoesAsOrdemProducaoGrade the value for the private _objBalancoAcoesAsOrdemProducaoGrade (Read-Only) if set due to an expansion on the balanco_acoes.ordem_producao_grade_id reverse relationship
	 * @property BalancoAcoes[] $_BalancoAcoesAsOrdemProducaoGradeArray the value for the private _objBalancoAcoesAsOrdemProducaoGradeArray (Read-Only) if set due to an ExpandAsArray on the balanco_acoes.ordem_producao_grade_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ComandoGradeGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column comando_grade.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_grade.referencia_id
		 * @var integer intReferenciaId
		 */
		protected $intReferenciaId;
		const ReferenciaIdDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_grade.tamanho_id
		 * @var integer intTamanhoId
		 */
		protected $intTamanhoId;
		const TamanhoIdDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_grade.comando_tecido_peca_id
		 * @var integer intComandoTecidoPecaId
		 */
		protected $intComandoTecidoPecaId;
		const ComandoTecidoPecaIdDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_grade.quantidade_risco
		 * @var integer intQuantidadeRisco
		 */
		protected $intQuantidadeRisco;
		const QuantidadeRiscoDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_grade.meia_risco
		 * @var boolean blnMeiaRisco
		 */
		protected $blnMeiaRisco;
		const MeiaRiscoDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_grade.quantidade_real
		 * @var integer intQuantidadeReal
		 */
		protected $intQuantidadeReal;
		const QuantidadeRealDefault = null;


		/**
		 * Protected member variable that maps to the database column comando_grade.peso
		 * @var double fltPeso
		 */
		protected $fltPeso;
		const PesoDefault = null;


		/**
		 * Private member variable that stores a reference to a single BalancoAcoesAsOrdemProducaoGrade object
		 * (of type BalancoAcoes), if this ComandoGrade object was restored with
		 * an expansion on the balanco_acoes association table.
		 * @var BalancoAcoes _objBalancoAcoesAsOrdemProducaoGrade;
		 */
		private $_objBalancoAcoesAsOrdemProducaoGrade;

		/**
		 * Private member variable that stores a reference to an array of BalancoAcoesAsOrdemProducaoGrade objects
		 * (of type BalancoAcoes[]), if this ComandoGrade object was restored with
		 * an ExpandAsArray on the balanco_acoes association table.
		 * @var BalancoAcoes[] _objBalancoAcoesAsOrdemProducaoGradeArray;
		 */
		private $_objBalancoAcoesAsOrdemProducaoGradeArray = array();

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
		 * in the database column comando_grade.referencia_id.
		 *
		 * NOTE: Always use the Referencia property getter to correctly retrieve this Referencia object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Referencia objReferencia
		 */
		protected $objReferencia;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column comando_grade.tamanho_id.
		 *
		 * NOTE: Always use the Tamanho property getter to correctly retrieve this Tamanho object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Tamanho objTamanho
		 */
		protected $objTamanho;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column comando_grade.comando_tecido_peca_id.
		 *
		 * NOTE: Always use the ComandoTecidoPeca property getter to correctly retrieve this ComandoTecidoPeca object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var ComandoTecidoPeca objComandoTecidoPeca
		 */
		protected $objComandoTecidoPeca;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column balanco_pecas.ordem_producao_grade_id.
		 *
		 * NOTE: Always use the BalancoPecasAsOrdemProducaoGrade property getter to correctly retrieve this BalancoPecas object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var BalancoPecas objBalancoPecasAsOrdemProducaoGrade
		 */
		protected $objBalancoPecasAsOrdemProducaoGrade;
		
		/**
		 * Used internally to manage whether the adjoined BalancoPecasAsOrdemProducaoGrade object
		 * needs to be updated on save.
		 * 
		 * NOTE: Do not manually update this value 
		 */
		protected $blnDirtyBalancoPecasAsOrdemProducaoGrade;





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
		 * Load a ComandoGrade from PK Info
		 * @param integer $intId
		 * @return ComandoGrade
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return ComandoGrade::QuerySingle(
				QQ::Equal(QQN::ComandoGrade()->Id, $intId)
			);
		}

		/**
		 * Load all ComandoGrades
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ComandoGrade[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call ComandoGrade::QueryArray to perform the LoadAll query
			try {
				return ComandoGrade::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all ComandoGrades
		 * @return int
		 */
		public static function CountAll() {
			// Call ComandoGrade::QueryCount to perform the CountAll query
			return ComandoGrade::QueryCount(QQ::All());
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
			$objDatabase = ComandoGrade::GetDatabase();

			// Create/Build out the QueryBuilder object with ComandoGrade-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'comando_grade');
			ComandoGrade::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('comando_grade');

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
		 * Static Qcodo Query method to query for a single ComandoGrade object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ComandoGrade the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ComandoGrade::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new ComandoGrade object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = ComandoGrade::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return ComandoGrade::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of ComandoGrade objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ComandoGrade[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ComandoGrade::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return ComandoGrade::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = ComandoGrade::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of ComandoGrade objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ComandoGrade::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = ComandoGrade::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'comando_grade_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with ComandoGrade-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				ComandoGrade::GetSelectFields($objQueryBuilder);
				ComandoGrade::GetFromFields($objQueryBuilder);

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
			return ComandoGrade::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this ComandoGrade
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'comando_grade';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'referencia_id', $strAliasPrefix . 'referencia_id');
			$objBuilder->AddSelectItem($strTableName, 'tamanho_id', $strAliasPrefix . 'tamanho_id');
			$objBuilder->AddSelectItem($strTableName, 'comando_tecido_peca_id', $strAliasPrefix . 'comando_tecido_peca_id');
			$objBuilder->AddSelectItem($strTableName, 'quantidade_risco', $strAliasPrefix . 'quantidade_risco');
			$objBuilder->AddSelectItem($strTableName, 'meia_risco', $strAliasPrefix . 'meia_risco');
			$objBuilder->AddSelectItem($strTableName, 'quantidade_real', $strAliasPrefix . 'quantidade_real');
			$objBuilder->AddSelectItem($strTableName, 'peso', $strAliasPrefix . 'peso');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a ComandoGrade from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this ComandoGrade::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return ComandoGrade
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
					$strAliasPrefix = 'comando_grade__';


				$strAlias = $strAliasPrefix . 'balancoacoesasordemproducaograde__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objBalancoAcoesAsOrdemProducaoGradeArray)) {
						$objPreviousChildItem = $objPreviousItem->_objBalancoAcoesAsOrdemProducaoGradeArray[$intPreviousChildItemCount - 1];
						$objChildItem = BalancoAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoesasordemproducaograde__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objBalancoAcoesAsOrdemProducaoGradeArray[] = $objChildItem;
					} else
						$objPreviousItem->_objBalancoAcoesAsOrdemProducaoGradeArray[] = BalancoAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoesasordemproducaograde__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'comando_grade__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the ComandoGrade object
			$objToReturn = new ComandoGrade();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'referencia_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'referencia_id'] : $strAliasPrefix . 'referencia_id';
			$objToReturn->intReferenciaId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'tamanho_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tamanho_id'] : $strAliasPrefix . 'tamanho_id';
			$objToReturn->intTamanhoId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'comando_tecido_peca_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'comando_tecido_peca_id'] : $strAliasPrefix . 'comando_tecido_peca_id';
			$objToReturn->intComandoTecidoPecaId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'quantidade_risco', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantidade_risco'] : $strAliasPrefix . 'quantidade_risco';
			$objToReturn->intQuantidadeRisco = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'meia_risco', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'meia_risco'] : $strAliasPrefix . 'meia_risco';
			$objToReturn->blnMeiaRisco = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAliasName = array_key_exists($strAliasPrefix . 'quantidade_real', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantidade_real'] : $strAliasPrefix . 'quantidade_real';
			$objToReturn->intQuantidadeReal = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'peso', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'peso'] : $strAliasPrefix . 'peso';
			$objToReturn->fltPeso = $objDbRow->GetColumn($strAliasName, 'Float');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'comando_grade__';

			// Check for Referencia Early Binding
			$strAlias = $strAliasPrefix . 'referencia_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objReferencia = Referencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'referencia_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Tamanho Early Binding
			$strAlias = $strAliasPrefix . 'tamanho_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTamanho = Tamanho::InstantiateDbRow($objDbRow, $strAliasPrefix . 'tamanho_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ComandoTecidoPeca Early Binding
			$strAlias = $strAliasPrefix . 'comando_tecido_peca_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objComandoTecidoPeca = ComandoTecidoPeca::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comando_tecido_peca_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);


			// Check for BalancoPecasAsOrdemProducaoGrade Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'balancopecasasordemproducaograde__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objBalancoPecasAsOrdemProducaoGrade = BalancoPecas::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancopecasasordemproducaograde__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objBalancoPecasAsOrdemProducaoGrade = false;
			}



			// Check for BalancoAcoesAsOrdemProducaoGrade Virtual Binding
			$strAlias = $strAliasPrefix . 'balancoacoesasordemproducaograde__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objBalancoAcoesAsOrdemProducaoGradeArray[] = BalancoAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoesasordemproducaograde__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objBalancoAcoesAsOrdemProducaoGrade = BalancoAcoes::InstantiateDbRow($objDbRow, $strAliasPrefix . 'balancoacoesasordemproducaograde__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of ComandoGrades from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return ComandoGrade[]
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
					$objItem = ComandoGrade::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = ComandoGrade::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single ComandoGrade object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return ComandoGrade next row resulting from the query
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
			return ComandoGrade::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single ComandoGrade object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return ComandoGrade
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return ComandoGrade::QuerySingle(
				QQ::Equal(QQN::ComandoGrade()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of ComandoGrade objects,
		 * by TamanhoId Index(es)
		 * @param integer $intTamanhoId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ComandoGrade[]
		*/
		public static function LoadArrayByTamanhoId($intTamanhoId, $objOptionalClauses = null) {
			// Call ComandoGrade::QueryArray to perform the LoadArrayByTamanhoId query
			try {
				return ComandoGrade::QueryArray(
					QQ::Equal(QQN::ComandoGrade()->TamanhoId, $intTamanhoId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ComandoGrades
		 * by TamanhoId Index(es)
		 * @param integer $intTamanhoId
		 * @return int
		*/
		public static function CountByTamanhoId($intTamanhoId, $objOptionalClauses = null) {
			// Call ComandoGrade::QueryCount to perform the CountByTamanhoId query
			return ComandoGrade::QueryCount(
				QQ::Equal(QQN::ComandoGrade()->TamanhoId, $intTamanhoId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of ComandoGrade objects,
		 * by ReferenciaId Index(es)
		 * @param integer $intReferenciaId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ComandoGrade[]
		*/
		public static function LoadArrayByReferenciaId($intReferenciaId, $objOptionalClauses = null) {
			// Call ComandoGrade::QueryArray to perform the LoadArrayByReferenciaId query
			try {
				return ComandoGrade::QueryArray(
					QQ::Equal(QQN::ComandoGrade()->ReferenciaId, $intReferenciaId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ComandoGrades
		 * by ReferenciaId Index(es)
		 * @param integer $intReferenciaId
		 * @return int
		*/
		public static function CountByReferenciaId($intReferenciaId, $objOptionalClauses = null) {
			// Call ComandoGrade::QueryCount to perform the CountByReferenciaId query
			return ComandoGrade::QueryCount(
				QQ::Equal(QQN::ComandoGrade()->ReferenciaId, $intReferenciaId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of ComandoGrade objects,
		 * by ComandoTecidoPecaId Index(es)
		 * @param integer $intComandoTecidoPecaId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ComandoGrade[]
		*/
		public static function LoadArrayByComandoTecidoPecaId($intComandoTecidoPecaId, $objOptionalClauses = null) {
			// Call ComandoGrade::QueryArray to perform the LoadArrayByComandoTecidoPecaId query
			try {
				return ComandoGrade::QueryArray(
					QQ::Equal(QQN::ComandoGrade()->ComandoTecidoPecaId, $intComandoTecidoPecaId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ComandoGrades
		 * by ComandoTecidoPecaId Index(es)
		 * @param integer $intComandoTecidoPecaId
		 * @return int
		*/
		public static function CountByComandoTecidoPecaId($intComandoTecidoPecaId, $objOptionalClauses = null) {
			// Call ComandoGrade::QueryCount to perform the CountByComandoTecidoPecaId query
			return ComandoGrade::QueryCount(
				QQ::Equal(QQN::ComandoGrade()->ComandoTecidoPecaId, $intComandoTecidoPecaId)
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
		 * Save this ComandoGrade
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = ComandoGrade::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `comando_grade` (
							`referencia_id`,
							`tamanho_id`,
							`comando_tecido_peca_id`,
							`quantidade_risco`,
							`meia_risco`,
							`quantidade_real`,
							`peso`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intReferenciaId) . ',
							' . $objDatabase->SqlVariable($this->intTamanhoId) . ',
							' . $objDatabase->SqlVariable($this->intComandoTecidoPecaId) . ',
							' . $objDatabase->SqlVariable($this->intQuantidadeRisco) . ',
							' . $objDatabase->SqlVariable($this->blnMeiaRisco) . ',
							' . $objDatabase->SqlVariable($this->intQuantidadeReal) . ',
							' . $objDatabase->SqlVariable($this->fltPeso) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('comando_grade', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`comando_grade`
						SET
							`referencia_id` = ' . $objDatabase->SqlVariable($this->intReferenciaId) . ',
							`tamanho_id` = ' . $objDatabase->SqlVariable($this->intTamanhoId) . ',
							`comando_tecido_peca_id` = ' . $objDatabase->SqlVariable($this->intComandoTecidoPecaId) . ',
							`quantidade_risco` = ' . $objDatabase->SqlVariable($this->intQuantidadeRisco) . ',
							`meia_risco` = ' . $objDatabase->SqlVariable($this->blnMeiaRisco) . ',
							`quantidade_real` = ' . $objDatabase->SqlVariable($this->intQuantidadeReal) . ',
							`peso` = ' . $objDatabase->SqlVariable($this->fltPeso) . '
						WHERE
							`id` = ' . $objDatabase->SqlVariable($this->intId) . '
					');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('UPDATE');
				}

		
		
				// Update the adjoined BalancoPecasAsOrdemProducaoGrade object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyBalancoPecasAsOrdemProducaoGrade) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = BalancoPecas::LoadByOrdemProducaoGradeId($this->intId)) {
						$objAssociated->OrdemProducaoGradeId = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objBalancoPecasAsOrdemProducaoGrade) {
						$this->objBalancoPecasAsOrdemProducaoGrade->OrdemProducaoGradeId = $this->intId;
						$this->objBalancoPecasAsOrdemProducaoGrade->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyBalancoPecasAsOrdemProducaoGrade = false;
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
		 * Delete this ComandoGrade
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this ComandoGrade with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = ComandoGrade::GetDatabase();

			
			
			// Update the adjoined BalancoPecasAsOrdemProducaoGrade object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = BalancoPecas::LoadByOrdemProducaoGradeId($this->intId)) {
				$objAssociated->Delete();
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_grade`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all ComandoGrades
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = ComandoGrade::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`comando_grade`');
		}

		/**
		 * Truncate comando_grade table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = ComandoGrade::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `comando_grade`');
		}

		/**
		 * Reload this ComandoGrade from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved ComandoGrade object.');

			// Reload the Object
			$objReloaded = ComandoGrade::Load($this->intId);

			// Update $this's local variables to match
			$this->ReferenciaId = $objReloaded->ReferenciaId;
			$this->TamanhoId = $objReloaded->TamanhoId;
			$this->ComandoTecidoPecaId = $objReloaded->ComandoTecidoPecaId;
			$this->intQuantidadeRisco = $objReloaded->intQuantidadeRisco;
			$this->blnMeiaRisco = $objReloaded->blnMeiaRisco;
			$this->intQuantidadeReal = $objReloaded->intQuantidadeReal;
			$this->fltPeso = $objReloaded->fltPeso;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = ComandoGrade::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `comando_grade` (
					`id`,
					`referencia_id`,
					`tamanho_id`,
					`comando_tecido_peca_id`,
					`quantidade_risco`,
					`meia_risco`,
					`quantidade_real`,
					`peso`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intReferenciaId) . ',
					' . $objDatabase->SqlVariable($this->intTamanhoId) . ',
					' . $objDatabase->SqlVariable($this->intComandoTecidoPecaId) . ',
					' . $objDatabase->SqlVariable($this->intQuantidadeRisco) . ',
					' . $objDatabase->SqlVariable($this->blnMeiaRisco) . ',
					' . $objDatabase->SqlVariable($this->intQuantidadeReal) . ',
					' . $objDatabase->SqlVariable($this->fltPeso) . ',
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
		 * @return ComandoGrade[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = ComandoGrade::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM comando_grade WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return ComandoGrade::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return ComandoGrade[]
		 */
		public function GetJournal() {
			return ComandoGrade::GetJournalForId($this->intId);
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

				case 'TamanhoId':
					// Gets the value for intTamanhoId (Not Null)
					// @return integer
					return $this->intTamanhoId;

				case 'ComandoTecidoPecaId':
					// Gets the value for intComandoTecidoPecaId (Not Null)
					// @return integer
					return $this->intComandoTecidoPecaId;

				case 'QuantidadeRisco':
					// Gets the value for intQuantidadeRisco (Not Null)
					// @return integer
					return $this->intQuantidadeRisco;

				case 'MeiaRisco':
					// Gets the value for blnMeiaRisco (Not Null)
					// @return boolean
					return $this->blnMeiaRisco;

				case 'QuantidadeReal':
					// Gets the value for intQuantidadeReal (Not Null)
					// @return integer
					return $this->intQuantidadeReal;

				case 'Peso':
					// Gets the value for fltPeso (Not Null)
					// @return double
					return $this->fltPeso;


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

				case 'Tamanho':
					// Gets the value for the Tamanho object referenced by intTamanhoId (Not Null)
					// @return Tamanho
					try {
						if ((!$this->objTamanho) && (!is_null($this->intTamanhoId)))
							$this->objTamanho = Tamanho::Load($this->intTamanhoId);
						return $this->objTamanho;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ComandoTecidoPeca':
					// Gets the value for the ComandoTecidoPeca object referenced by intComandoTecidoPecaId (Not Null)
					// @return ComandoTecidoPeca
					try {
						if ((!$this->objComandoTecidoPeca) && (!is_null($this->intComandoTecidoPecaId)))
							$this->objComandoTecidoPeca = ComandoTecidoPeca::Load($this->intComandoTecidoPecaId);
						return $this->objComandoTecidoPeca;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

		
		
				case 'BalancoPecasAsOrdemProducaoGrade':
					// Gets the value for the BalancoPecas object that uniquely references this ComandoGrade
					// by objBalancoPecasAsOrdemProducaoGrade (Unique)
					// @return BalancoPecas
					try {
						if ($this->objBalancoPecasAsOrdemProducaoGrade === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objBalancoPecasAsOrdemProducaoGrade)
							$this->objBalancoPecasAsOrdemProducaoGrade = BalancoPecas::LoadByOrdemProducaoGradeId($this->intId);
						return $this->objBalancoPecasAsOrdemProducaoGrade;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_BalancoAcoesAsOrdemProducaoGrade':
					// Gets the value for the private _objBalancoAcoesAsOrdemProducaoGrade (Read-Only)
					// if set due to an expansion on the balanco_acoes.ordem_producao_grade_id reverse relationship
					// @return BalancoAcoes
					return $this->_objBalancoAcoesAsOrdemProducaoGrade;

				case '_BalancoAcoesAsOrdemProducaoGradeArray':
					// Gets the value for the private _objBalancoAcoesAsOrdemProducaoGradeArray (Read-Only)
					// if set due to an ExpandAsArray on the balanco_acoes.ordem_producao_grade_id reverse relationship
					// @return BalancoAcoes[]
					return (array) $this->_objBalancoAcoesAsOrdemProducaoGradeArray;


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

				case 'TamanhoId':
					// Sets the value for intTamanhoId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objTamanho = null;
						return ($this->intTamanhoId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ComandoTecidoPecaId':
					// Sets the value for intComandoTecidoPecaId (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						$this->objComandoTecidoPeca = null;
						return ($this->intComandoTecidoPecaId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'QuantidadeRisco':
					// Sets the value for intQuantidadeRisco (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intQuantidadeRisco = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MeiaRisco':
					// Sets the value for blnMeiaRisco (Not Null)
					// @param boolean $mixValue
					// @return boolean
					try {
						return ($this->blnMeiaRisco = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'QuantidadeReal':
					// Sets the value for intQuantidadeReal (Not Null)
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intQuantidadeReal = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Peso':
					// Sets the value for fltPeso (Not Null)
					// @param double $mixValue
					// @return double
					try {
						return ($this->fltPeso = QType::Cast($mixValue, QType::Float));
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
							throw new QCallerException('Unable to set an unsaved Referencia for this ComandoGrade');

						// Update Local Member Variables
						$this->objReferencia = $mixValue;
						$this->intReferenciaId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Tamanho':
					// Sets the value for the Tamanho object referenced by intTamanhoId (Not Null)
					// @param Tamanho $mixValue
					// @return Tamanho
					if (is_null($mixValue)) {
						$this->intTamanhoId = null;
						$this->objTamanho = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Tamanho object
						try {
							$mixValue = QType::Cast($mixValue, 'Tamanho');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Tamanho object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Tamanho for this ComandoGrade');

						// Update Local Member Variables
						$this->objTamanho = $mixValue;
						$this->intTamanhoId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ComandoTecidoPeca':
					// Sets the value for the ComandoTecidoPeca object referenced by intComandoTecidoPecaId (Not Null)
					// @param ComandoTecidoPeca $mixValue
					// @return ComandoTecidoPeca
					if (is_null($mixValue)) {
						$this->intComandoTecidoPecaId = null;
						$this->objComandoTecidoPeca = null;
						return null;
					} else {
						// Make sure $mixValue actually is a ComandoTecidoPeca object
						try {
							$mixValue = QType::Cast($mixValue, 'ComandoTecidoPeca');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED ComandoTecidoPeca object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved ComandoTecidoPeca for this ComandoGrade');

						// Update Local Member Variables
						$this->objComandoTecidoPeca = $mixValue;
						$this->intComandoTecidoPecaId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'BalancoPecasAsOrdemProducaoGrade':
					// Sets the value for the BalancoPecas object referenced by objBalancoPecasAsOrdemProducaoGrade (Unique)
					// @param BalancoPecas $mixValue
					// @return BalancoPecas
					if (is_null($mixValue)) {
						$this->objBalancoPecasAsOrdemProducaoGrade = null;

						// Make sure we update the adjoined BalancoPecas object the next time we call Save()
						$this->blnDirtyBalancoPecasAsOrdemProducaoGrade = true;

						return null;
					} else {
						// Make sure $mixValue actually is a BalancoPecas object
						try {
							$mixValue = QType::Cast($mixValue, 'BalancoPecas');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objBalancoPecasAsOrdemProducaoGrade to a DIFFERENT $mixValue?
						if ((!$this->BalancoPecasAsOrdemProducaoGrade) || ($this->BalancoPecasAsOrdemProducaoGrade->Id != $mixValue->Id)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined BalancoPecas object the next time we call Save()
							$this->blnDirtyBalancoPecasAsOrdemProducaoGrade = true;

							// Update Local Member Variable
							$this->objBalancoPecasAsOrdemProducaoGrade = $mixValue;
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

			
		
		// Related Objects' Methods for BalancoAcoesAsOrdemProducaoGrade
		//-------------------------------------------------------------------

		/**
		 * Gets all associated BalancoAcoesesAsOrdemProducaoGrade as an array of BalancoAcoes objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return BalancoAcoes[]
		*/ 
		public function GetBalancoAcoesAsOrdemProducaoGradeArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return BalancoAcoes::LoadArrayByOrdemProducaoGradeId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated BalancoAcoesesAsOrdemProducaoGrade
		 * @return int
		*/ 
		public function CountBalancoAcoesesAsOrdemProducaoGrade() {
			if ((is_null($this->intId)))
				return 0;

			return BalancoAcoes::CountByOrdemProducaoGradeId($this->intId);
		}

		/**
		 * Associates a BalancoAcoesAsOrdemProducaoGrade
		 * @param BalancoAcoes $objBalancoAcoes
		 * @return void
		*/ 
		public function AssociateBalancoAcoesAsOrdemProducaoGrade(BalancoAcoes $objBalancoAcoes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBalancoAcoesAsOrdemProducaoGrade on this unsaved ComandoGrade.');
			if ((is_null($objBalancoAcoes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBalancoAcoesAsOrdemProducaoGrade on this ComandoGrade with an unsaved BalancoAcoes.');

			// Get the Database Object for this Class
			$objDatabase = ComandoGrade::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balanco_acoes`
				SET
					`ordem_producao_grade_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objBalancoAcoes->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objBalancoAcoes->OrdemProducaoGradeId = $this->intId;
				$objBalancoAcoes->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a BalancoAcoesAsOrdemProducaoGrade
		 * @param BalancoAcoes $objBalancoAcoes
		 * @return void
		*/ 
		public function UnassociateBalancoAcoesAsOrdemProducaoGrade(BalancoAcoes $objBalancoAcoes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesAsOrdemProducaoGrade on this unsaved ComandoGrade.');
			if ((is_null($objBalancoAcoes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesAsOrdemProducaoGrade on this ComandoGrade with an unsaved BalancoAcoes.');

			// Get the Database Object for this Class
			$objDatabase = ComandoGrade::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balanco_acoes`
				SET
					`ordem_producao_grade_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objBalancoAcoes->Id) . ' AND
					`ordem_producao_grade_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objBalancoAcoes->OrdemProducaoGradeId = null;
				$objBalancoAcoes->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all BalancoAcoesesAsOrdemProducaoGrade
		 * @return void
		*/ 
		public function UnassociateAllBalancoAcoesesAsOrdemProducaoGrade() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesAsOrdemProducaoGrade on this unsaved ComandoGrade.');

			// Get the Database Object for this Class
			$objDatabase = ComandoGrade::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (BalancoAcoes::LoadArrayByOrdemProducaoGradeId($this->intId) as $objBalancoAcoes) {
					$objBalancoAcoes->OrdemProducaoGradeId = null;
					$objBalancoAcoes->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`balanco_acoes`
				SET
					`ordem_producao_grade_id` = null
				WHERE
					`ordem_producao_grade_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated BalancoAcoesAsOrdemProducaoGrade
		 * @param BalancoAcoes $objBalancoAcoes
		 * @return void
		*/ 
		public function DeleteAssociatedBalancoAcoesAsOrdemProducaoGrade(BalancoAcoes $objBalancoAcoes) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesAsOrdemProducaoGrade on this unsaved ComandoGrade.');
			if ((is_null($objBalancoAcoes->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesAsOrdemProducaoGrade on this ComandoGrade with an unsaved BalancoAcoes.');

			// Get the Database Object for this Class
			$objDatabase = ComandoGrade::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_acoes`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objBalancoAcoes->Id) . ' AND
					`ordem_producao_grade_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objBalancoAcoes->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated BalancoAcoesesAsOrdemProducaoGrade
		 * @return void
		*/ 
		public function DeleteAllBalancoAcoesesAsOrdemProducaoGrade() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBalancoAcoesAsOrdemProducaoGrade on this unsaved ComandoGrade.');

			// Get the Database Object for this Class
			$objDatabase = ComandoGrade::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (BalancoAcoes::LoadArrayByOrdemProducaoGradeId($this->intId) as $objBalancoAcoes) {
					$objBalancoAcoes->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`balanco_acoes`
				WHERE
					`ordem_producao_grade_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="ComandoGrade"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Referencia" type="xsd1:Referencia"/>';
			$strToReturn .= '<element name="Tamanho" type="xsd1:Tamanho"/>';
			$strToReturn .= '<element name="ComandoTecidoPeca" type="xsd1:ComandoTecidoPeca"/>';
			$strToReturn .= '<element name="QuantidadeRisco" type="xsd:int"/>';
			$strToReturn .= '<element name="MeiaRisco" type="xsd:boolean"/>';
			$strToReturn .= '<element name="QuantidadeReal" type="xsd:int"/>';
			$strToReturn .= '<element name="Peso" type="xsd:float"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('ComandoGrade', $strComplexTypeArray)) {
				$strComplexTypeArray['ComandoGrade'] = ComandoGrade::GetSoapComplexTypeXml();
				Referencia::AlterSoapComplexTypeArray($strComplexTypeArray);
				Tamanho::AlterSoapComplexTypeArray($strComplexTypeArray);
				ComandoTecidoPeca::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, ComandoGrade::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new ComandoGrade();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'Referencia')) &&
				($objSoapObject->Referencia))
				$objToReturn->Referencia = Referencia::GetObjectFromSoapObject($objSoapObject->Referencia);
			if ((property_exists($objSoapObject, 'Tamanho')) &&
				($objSoapObject->Tamanho))
				$objToReturn->Tamanho = Tamanho::GetObjectFromSoapObject($objSoapObject->Tamanho);
			if ((property_exists($objSoapObject, 'ComandoTecidoPeca')) &&
				($objSoapObject->ComandoTecidoPeca))
				$objToReturn->ComandoTecidoPeca = ComandoTecidoPeca::GetObjectFromSoapObject($objSoapObject->ComandoTecidoPeca);
			if (property_exists($objSoapObject, 'QuantidadeRisco'))
				$objToReturn->intQuantidadeRisco = $objSoapObject->QuantidadeRisco;
			if (property_exists($objSoapObject, 'MeiaRisco'))
				$objToReturn->blnMeiaRisco = $objSoapObject->MeiaRisco;
			if (property_exists($objSoapObject, 'QuantidadeReal'))
				$objToReturn->intQuantidadeReal = $objSoapObject->QuantidadeReal;
			if (property_exists($objSoapObject, 'Peso'))
				$objToReturn->fltPeso = $objSoapObject->Peso;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, ComandoGrade::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objReferencia)
				$objObject->objReferencia = Referencia::GetSoapObjectFromObject($objObject->objReferencia, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intReferenciaId = null;
			if ($objObject->objTamanho)
				$objObject->objTamanho = Tamanho::GetSoapObjectFromObject($objObject->objTamanho, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTamanhoId = null;
			if ($objObject->objComandoTecidoPeca)
				$objObject->objComandoTecidoPeca = ComandoTecidoPeca::GetSoapObjectFromObject($objObject->objComandoTecidoPeca, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intComandoTecidoPecaId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $ReferenciaId
	 * @property-read QQNodeReferencia $Referencia
	 * @property-read QQNode $TamanhoId
	 * @property-read QQNodeTamanho $Tamanho
	 * @property-read QQNode $ComandoTecidoPecaId
	 * @property-read QQNodeComandoTecidoPeca $ComandoTecidoPeca
	 * @property-read QQNode $QuantidadeRisco
	 * @property-read QQNode $MeiaRisco
	 * @property-read QQNode $QuantidadeReal
	 * @property-read QQNode $Peso
	 * @property-read QQReverseReferenceNodeBalancoAcoes $BalancoAcoesAsOrdemProducaoGrade
	 * @property-read QQReverseReferenceNodeBalancoPecas $BalancoPecasAsOrdemProducaoGrade
	 */
	class QQNodeComandoGrade extends QQNode {
		protected $strTableName = 'comando_grade';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'ComandoGrade';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'ReferenciaId':
					return new QQNode('referencia_id', 'ReferenciaId', 'integer', $this);
				case 'Referencia':
					return new QQNodeReferencia('referencia_id', 'Referencia', 'integer', $this);
				case 'TamanhoId':
					return new QQNode('tamanho_id', 'TamanhoId', 'integer', $this);
				case 'Tamanho':
					return new QQNodeTamanho('tamanho_id', 'Tamanho', 'integer', $this);
				case 'ComandoTecidoPecaId':
					return new QQNode('comando_tecido_peca_id', 'ComandoTecidoPecaId', 'integer', $this);
				case 'ComandoTecidoPeca':
					return new QQNodeComandoTecidoPeca('comando_tecido_peca_id', 'ComandoTecidoPeca', 'integer', $this);
				case 'QuantidadeRisco':
					return new QQNode('quantidade_risco', 'QuantidadeRisco', 'integer', $this);
				case 'MeiaRisco':
					return new QQNode('meia_risco', 'MeiaRisco', 'boolean', $this);
				case 'QuantidadeReal':
					return new QQNode('quantidade_real', 'QuantidadeReal', 'integer', $this);
				case 'Peso':
					return new QQNode('peso', 'Peso', 'double', $this);
				case 'BalancoAcoesAsOrdemProducaoGrade':
					return new QQReverseReferenceNodeBalancoAcoes($this, 'balancoacoesasordemproducaograde', 'reverse_reference', 'ordem_producao_grade_id');
				case 'BalancoPecasAsOrdemProducaoGrade':
					return new QQReverseReferenceNodeBalancoPecas($this, 'balancopecasasordemproducaograde', 'reverse_reference', 'ordem_producao_grade_id', 'BalancoPecasAsOrdemProducaoGrade');

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
	 * @property-read QQNode $TamanhoId
	 * @property-read QQNodeTamanho $Tamanho
	 * @property-read QQNode $ComandoTecidoPecaId
	 * @property-read QQNodeComandoTecidoPeca $ComandoTecidoPeca
	 * @property-read QQNode $QuantidadeRisco
	 * @property-read QQNode $MeiaRisco
	 * @property-read QQNode $QuantidadeReal
	 * @property-read QQNode $Peso
	 * @property-read QQReverseReferenceNodeBalancoAcoes $BalancoAcoesAsOrdemProducaoGrade
	 * @property-read QQReverseReferenceNodeBalancoPecas $BalancoPecasAsOrdemProducaoGrade
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeComandoGrade extends QQReverseReferenceNode {
		protected $strTableName = 'comando_grade';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'ComandoGrade';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'ReferenciaId':
					return new QQNode('referencia_id', 'ReferenciaId', 'integer', $this);
				case 'Referencia':
					return new QQNodeReferencia('referencia_id', 'Referencia', 'integer', $this);
				case 'TamanhoId':
					return new QQNode('tamanho_id', 'TamanhoId', 'integer', $this);
				case 'Tamanho':
					return new QQNodeTamanho('tamanho_id', 'Tamanho', 'integer', $this);
				case 'ComandoTecidoPecaId':
					return new QQNode('comando_tecido_peca_id', 'ComandoTecidoPecaId', 'integer', $this);
				case 'ComandoTecidoPeca':
					return new QQNodeComandoTecidoPeca('comando_tecido_peca_id', 'ComandoTecidoPeca', 'integer', $this);
				case 'QuantidadeRisco':
					return new QQNode('quantidade_risco', 'QuantidadeRisco', 'integer', $this);
				case 'MeiaRisco':
					return new QQNode('meia_risco', 'MeiaRisco', 'boolean', $this);
				case 'QuantidadeReal':
					return new QQNode('quantidade_real', 'QuantidadeReal', 'integer', $this);
				case 'Peso':
					return new QQNode('peso', 'Peso', 'double', $this);
				case 'BalancoAcoesAsOrdemProducaoGrade':
					return new QQReverseReferenceNodeBalancoAcoes($this, 'balancoacoesasordemproducaograde', 'reverse_reference', 'ordem_producao_grade_id');
				case 'BalancoPecasAsOrdemProducaoGrade':
					return new QQReverseReferenceNodeBalancoPecas($this, 'balancopecasasordemproducaograde', 'reverse_reference', 'ordem_producao_grade_id', 'BalancoPecasAsOrdemProducaoGrade');

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