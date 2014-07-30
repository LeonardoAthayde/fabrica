<?php
	require(__DATAGEN_META_CONTROLS__ . '/FluxogramaAcoesTempoMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * FluxogramaAcoesTempo class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single FluxogramaAcoesTempo object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FluxogramaAcoesTempoMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 */
	class FluxogramaAcoesTempoMetaControl extends FluxogramaAcoesTempoMetaControlGen {
		
		public function txtTempo_Create($strControlId = null) {
			$this->txtTempo = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtTempo->Name = QApplication::Translate('Tempo');
			$this->txtTempo->Text = $this->objFluxogramaAcoesTempo->Tempo;
			$this->txtTempo->Required = true;
			$this->txtTempo->Display = false;
			return $this->txtTempo;
		}
		
		public function calTempoMarcado_Create($strControlId = null) {
			$this->calTempoMarcado = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTempoMarcado->Name = QApplication::Translate('Tempo Marcado');
			$this->calTempoMarcado->DateTime = $this->objFluxogramaAcoesTempo->TempoMarcado;
			$this->calTempoMarcado->DateTimePickerType = QDateTimePickerType::TimeSeconds;
			$this->calTempoMarcado->Required = true;
			return $this->calTempoMarcado;
		}
		
		public function calTempoAjustado_Create($strControlId = null) {
			$this->calTempoAjustado = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calTempoAjustado->Name = QApplication::Translate('Tempo Ajustado');
			$this->calTempoAjustado->DateTime = $this->objFluxogramaAcoesTempo->TempoAjustado;
			$this->calTempoAjustado->DateTimePickerType = QDateTimePickerType::Time;
			$this->calTempoAjustado->Required = true;
			$this->calTempoAjustado->Display = false;
			return $this->calTempoAjustado;
		}
		
		public function SaveFluxogramaAcoesTempo() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstFluxogramaAcoes) $this->objFluxogramaAcoesTempo->FluxogramaAcoesId = $this->lstFluxogramaAcoes->SelectedValue;
				if ($this->txtTempo) $this->objFluxogramaAcoesTempo->Tempo = $this->txtTempo->Text;
				if ($this->calTempoMarcado) $this->objFluxogramaAcoesTempo->TempoMarcado = $this->calTempoMarcado->DateTime;
				if ($this->calTempoAjustado) $this->objFluxogramaAcoesTempo->TempoAjustado = $this->calTempoAjustado->DateTime;

				$fltSeconds = $this->calTempoMarcado->DateTime->Difference(new QDateTime())->Seconds;
				$intSeconds = intval($fltSeconds*0.2);
				
				$dttAjustado = $this->calTempoMarcado->DateTime;
				$dttAjustado->AddSeconds($intSeconds);				
				
				if ($this->calTempoMarcado) $this->objFluxogramaAcoesTempo->TempoAjustado = $dttAjustado;
					
				
				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the FluxogramaAcoesTempo object
				$this->objFluxogramaAcoesTempo->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}		
		
	}
?>