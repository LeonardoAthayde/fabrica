<?php
	/**
	 * This class will render a List of HTML Checkboxes (inhereting from
	 * ListControl). By definition, checkbox lists are multiple-select
	 * ListControls.
	 *
	 * @property string $TextAlign specifies if each ListItem's Name should be
	 * displayed to the left or to the right of the checkbox.
	 * @property integer $CellPadding specified the HTML Table's CellPadding
	 * @property integer $CellSpacing specified the HTML Table's CellSpacing
	 * @property integer $RepeatColumns specifies how many columns should be
	 * rendered in the HTML Table
	 * @property string $RepeatDirection specifies which direction should the
	 * list go first...
	 *
	 * So assuming you have a list of 10 items, and you have RepeatColumn set
	 * to 3:
	 *
	 * RepeatDirection::Horizontal would render as:
	 * 1	2	3
	 * 4	5	6
	 * 7	8	9
	 * 10
	 *
	 * RepeatDirection::Vertical would render as:
	 * 1	5	8
	 * 2	6	9
	 * 3	7	10
	 * 4
	 */
	class QCheckBoxTextBoxList extends QCheckBoxList {

		
		protected function GetControlHtml() {
			if ((!$this->objItemsArray) || (count($this->objItemsArray) == 0))
				return "";

			if ($this->intTabIndex)
				$strTabIndex = sprintf('tabindex="%s" ', $this->intTabIndex);
			else
				$strTabIndex = "";

			if ($this->strToolTip)
				$strToolTip = sprintf('title="%s" ', $this->strToolTip);
			else
				$strToolTip = "";

			if ($this->strCssClass)
				$strCssClass = sprintf('class="%s" ', $this->strCssClass);
			else
				$strCssClass = "";

			if ($this->strAccessKey)
				$strAccessKey = sprintf('accesskey="%s" ', $this->strAccessKey);
			else
				$strAccessKey = "";
		
			$strStyle = $this->GetStyleAttributes();
			if (strlen($strStyle) > 0)
				$strStyle = sprintf('style="%s" ', $strStyle);

			$strCustomAttributes = $this->GetCustomAttributes();

			if ($this->intCellPadding >= 0)
				$strCellPadding = sprintf('cellpadding="%s" ', $this->intCellPadding);
			else
				$strCellPadding = "";

			if ($this->intCellSpacing >= 0)
				$strCellSpacing = sprintf('cellspacing="%s" ', $this->intCellSpacing);
			else
				$strCellSpacing = "";
			
			// Generate Table HTML
			$strToReturn = sprintf('<table id="%s" %s%sborder="0" %s%s%s%s%s>',
				$this->strControlId,
				$strCellPadding,
				$strCellSpacing,
				$strAccessKey,
				$strToolTip,
				$strCssClass,
				$strStyle,
				$strCustomAttributes);

			if ($this->ItemCount > 0) {
				// Figure out the number of ROWS for this table
				$intRowCount = floor($this->ItemCount / $this->intRepeatColumns);
				$intWidowCount = ($this->ItemCount % $this->intRepeatColumns);
				if ($intWidowCount > 0)
					$intRowCount++;

				// Iterate through Table Rows
				for ($intRowIndex = 0; $intRowIndex < $intRowCount; $intRowIndex++) {
					$strToReturn .= '<tr>';

					// Figure out the number of COLUMNS for this particular ROW
					if (($intRowIndex == $intRowCount - 1) && ($intWidowCount > 0))
						// on the last row for a table with widowed-columns, ColCount is the number of widows
						$intColCount = $intWidowCount;
					else
						// otherwise, ColCount is simply intRepeatColumns
						$intColCount = $this->intRepeatColumns;

					// Iterate through Table Columns
					for ($intColIndex = 0; $intColIndex < $intColCount; $intColIndex++) {
						//leo
						$txtControl = new QIntegerTextBox($this);
						//leo
						
						
						if ($this->strRepeatDirection == QRepeatDirection::Horizontal)
							$intIndex = $intColIndex + $this->intRepeatColumns * $intRowIndex;
						else
							$intIndex = (floor($this->ItemCount / $this->intRepeatColumns) * $intColIndex)
								+ min(($this->ItemCount % $this->intRepeatColumns), $intColIndex)
								+ $intRowIndex;

						if ($this->objItemsArray[$intIndex]->Selected)
							$strChecked = 'checked="checked" ';
						else
							$strChecked = "";
	
						if ($this->blnEnabled) {
							$strDisabledStart = '';
							$strDisabledEnd = '';
							$strDisabled = '';
						} else {
							$strDisabledStart = '<span disabled="disabled">';
							$strDisabledEnd = '</span>';
							$strDisabled = 'disabled="disabled" ';
						}
						
						if ($this->objItemsArray[$intIndex]->ItemStyle) {
							$strLabelAttributes = $this->objItemsArray[$intIndex]->ItemStyle->GetAttributes();
							$strCheckboxAttributes = $this->objItemsArray[$intIndex]->ItemStyle->GetNonStyleAttributes();
						} else {
							$strLabelAttributes = null;
							$strCheckboxAttributes = null;
						}

						// ActionParameter is overridden by the framework to store and pass int othe event handler the index
						// of the item that was actually checked.  Without this, the event handler will not be able to easily
						// respond to actions based on specific items that have been checked/clicked.
						$this->strActionParameter = $intIndex;

						$strActions = $this->GetActionAttributes();

						if ($this->strTextAlign == QTextAlign::Left) {
							$strToReturn .= sprintf('<td>%s<label for="%s[%s]" %s>%s</label><input id="%s[%s]" name="%s[%s]" type="checkbox" %s%s%s%s%s />%s</td>',
								$strDisabledStart,
								$this->strControlId,
								$intIndex,
								$strLabelAttributes,
								($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->objItemsArray[$intIndex]->Name) : $this->objItemsArray[$intIndex]->Name,
								$this->strControlId,
								$intIndex,
								$this->strControlId,
								$intIndex,
								$strDisabled,
								$strChecked,
								$strActions,
								$strTabIndex,
								$strCheckboxAttributes,
								$strDisabledEnd);
						} else {
							$strToReturn .= sprintf('<td>%s<input id="%s[%s]" name="%s[%s]" type="checkbox" %s%s%s%s%s /><label for="%s[%s]" %s>%s</label>%s</td>',
								$strDisabledStart,
								$this->strControlId,
								$intIndex,
								$this->strControlId,
								$intIndex,
								$strDisabled,
								$strChecked,
								$strActions,
								$strTabIndex,
								$strCheckboxAttributes,
								$this->strControlId,
								$intIndex,
								$strLabelAttributes,
								($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->objItemsArray[$intIndex]->Name) : $this->objItemsArray[$intIndex]->Name,
								$strDisabledEnd);
						}
					}
					
					$strToReturn .= '</tr>';
				}
			}

			$strToReturn .= '</table>';

			return $strToReturn;
		}

		
		
	}
?>