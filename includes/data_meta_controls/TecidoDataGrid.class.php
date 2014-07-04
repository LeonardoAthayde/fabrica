<?php
	require(__DATAGEN_META_CONTROLS__ . '/TecidoDataGridGen.class.php');


	class TecidoDataGrid extends TecidoDataGridGen {
		
		/**
		 * Will add an "edit" link-based column, using a standard HREF link to redirect the user to a page
		 * that must be specified.
		 *
		 * @param string $strLinkUrl the URL to redirect the user to
		 * @param string $strLinkHtml the HTML of the link text
		 * @param string $strColumnTitle the HTML of the link text
		 * @param string $intArgumentType the method used to pass information to the edit page (defaults to PathInfo)
		 */
		public function MetaAddEditLinkColumn($strLinkUrl, $strLinkHtml = 'Edit', $strColumnTitle = 'Edit', $intArgumentType = QMetaControlArgumentType::PathInfo) {
			switch ($intArgumentType) {
				case QMetaControlArgumentType::QueryString:
					$strLinkUrl .= '?intId=<?=urlencode($_ITEM->Id)?>';
					break;
				case QMetaControlArgumentType::PathInfo:
					$strLinkUrl .= '/<?=str_replace("+","%20",urlencode($_ITEM->Id))?>';
					break;
				default:
					throw new QCallerException('Unable to pass arguments with this intArgumentType: ' . $intArgumentType);
			}

			$strHtml = '<a href="' . $strLinkUrl . '" class="btn btn-default btn-lg width100" >' . QApplication::Translate($strLinkHtml) . '</a>';
			$colEditColumn = new QDataGridColumn(QApplication::Translate($strColumnTitle), $strHtml, 'HtmlEntities=False');

			$this->AddColumn($colEditColumn);
			return $colEditColumn;
		}		
		
	}
?>