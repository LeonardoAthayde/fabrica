<?php
	class QQN {
		/**
		 * @return QQNodeBalancoAcoes
		 */
		static public function BalancoAcoes() {
			return new QQNodeBalancoAcoes('balanco_acoes', null, null);
		}
		/**
		 * @return QQNodeBalancoAcoesDepedencia
		 */
		static public function BalancoAcoesDepedencia() {
			return new QQNodeBalancoAcoesDepedencia('balanco_acoes_depedencia', null, null);
		}
		/**
		 * @return QQNodeBalancoPecas
		 */
		static public function BalancoPecas() {
			return new QQNodeBalancoPecas('balanco_pecas', null, null);
		}
		/**
		 * @return QQNodeCor
		 */
		static public function Cor() {
			return new QQNodeCor('cor', null, null);
		}
		/**
		 * @return QQNodeCostureira
		 */
		static public function Costureira() {
			return new QQNodeCostureira('costureira', null, null);
		}
		/**
		 * @return QQNodeCostureiraProducao
		 */
		static public function CostureiraProducao() {
			return new QQNodeCostureiraProducao('costureira_producao', null, null);
		}
		/**
		 * @return QQNodeCostureiraTempo
		 */
		static public function CostureiraTempo() {
			return new QQNodeCostureiraTempo('costureira_tempo', null, null);
		}
		/**
		 * @return QQNodeFluxogramaAcoes
		 */
		static public function FluxogramaAcoes() {
			return new QQNodeFluxogramaAcoes('fluxograma_acoes', null, null);
		}
		/**
		 * @return QQNodeFluxogramaItem
		 */
		static public function FluxogramaItem() {
			return new QQNodeFluxogramaItem('fluxograma_item', null, null);
		}
		/**
		 * @return QQNodeFluxogramaItemReal
		 */
		static public function FluxogramaItemReal() {
			return new QQNodeFluxogramaItemReal('fluxograma_item_real', null, null);
		}
		/**
		 * @return QQNodeMaquina
		 */
		static public function Maquina() {
			return new QQNodeMaquina('maquina', null, null);
		}
		/**
		 * @return QQNodeMenu
		 */
		static public function Menu() {
			return new QQNodeMenu('menu', null, null);
		}
		/**
		 * @return QQNodeOrdemProducao
		 */
		static public function OrdemProducao() {
			return new QQNodeOrdemProducao('ordem_producao', null, null);
		}
		/**
		 * @return QQNodeOrdemProducaoGrade
		 */
		static public function OrdemProducaoGrade() {
			return new QQNodeOrdemProducaoGrade('ordem_producao_grade', null, null);
		}
		/**
		 * @return QQNodeReferencia
		 */
		static public function Referencia() {
			return new QQNodeReferencia('referencia', null, null);
		}
		/**
		 * @return QQNodeReferenciaCategoria
		 */
		static public function ReferenciaCategoria() {
			return new QQNodeReferenciaCategoria('referencia_categoria', null, null);
		}
		/**
		 * @return QQNodeTamanho
		 */
		static public function Tamanho() {
			return new QQNodeTamanho('tamanho', null, null);
		}
		/**
		 * @return QQNodeTecido
		 */
		static public function Tecido() {
			return new QQNodeTecido('tecido', null, null);
		}
		/**
		 * @return QQNodeUsuario
		 */
		static public function Usuario() {
			return new QQNodeUsuario('usuario', null, null);
		}
	}
?>