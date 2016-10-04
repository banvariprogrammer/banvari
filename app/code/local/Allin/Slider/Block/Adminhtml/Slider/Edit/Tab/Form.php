<?php
class Allin_Slider_Block_Adminhtml_Slider_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("slider_form", array("legend"=>Mage::helper("slider")->__("Item information")));

				
						$fieldset->addField("title", "text", array(
						"label" => Mage::helper("slider")->__("Title"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "title",
						));
									
						$fieldset->addField('image', 'image', array(
						'label' => Mage::helper('slider')->__('Image'),
						'name' => 'image',
						'note' => '(*.jpg, *.png, *.gif)',
						));
						$fieldset->addField("description", "textarea", array(
						"label" => Mage::helper("slider")->__("Description"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "description",
						));
									
						 $fieldset->addField('status', 'select', array(
						'label'     => Mage::helper('slider')->__('Status'),
						'values'   => Allin_Slider_Block_Adminhtml_Slider_Grid::getValueArray3(),
						'name' => 'status',					
						"class" => "required-entry",
						"required" => true,
						));

				if (Mage::getSingleton("adminhtml/session")->getSliderData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getSliderData());
					Mage::getSingleton("adminhtml/session")->setSliderData(null);
				} 
				elseif(Mage::registry("slider_data")) {
				    $form->setValues(Mage::registry("slider_data")->getData());
				}
				return parent::_prepareForm();
		}
}
