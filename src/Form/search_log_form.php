<?php  
/**  
 * @file  
 * Contains Drupal\search_log\Form\search_log_form.  
 */  
namespace Drupal\search_log\Form;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class Search_log_form extends ConfigFormBase{


	public function getFormId(){

		return 'search_log_admin_settings';

	}

	protected function getEditableConfigNames(){

		return[
			'search_log.settings',

		];
	}



	public function buildForm(array $form ,FormStateInterface $form_state){
		$config = $this->config('search_log.settings');
		
		$form['search_log_module'] =[
			'#type' => 'checkbox',
			'#title' => $this->t('module'),
		];

		$form['search_log_node'] =[
			'#type' => 'checkbox',
			'#title' => $this->t('node'),
			
		];

		$form['search_log_days']=[

			'#type' => 'number',
			'#description' => $this->t('set number of days ')

		];	

		$form['search_log_status']=[
			
			'#type' => 'button',
			'#value' => 'clear',
			'#description' => $this->t('click so as to clear search_log table'),
		];

		return parent::buildForm($form, $form_state);

	}

	public function submitForm(array &$form, FormStateInterface $form_state){

		$days = $form_state->getValue('search_log_days');
		// print_r($days);
		// die();

		return  parent::submitForm($form, $form_state);


	}
	
}