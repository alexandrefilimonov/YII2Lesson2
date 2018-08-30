<?php
class m180827_170733_create_event_table extends Migration
{
	public function safeUp()
	{
		$this->createTable('event', [
			'id' => $this->primaryKey(),
			'name' => $this->string()->comment('Name of event'),
			'start_at' => $this->timestamp()->defaultExpression('NOW()')->comment('Date to start'),
			'end_at' => $this->timestamp()->defaultExpression('NOW()')->comment('Date to finish'),
			'created_at' => $this->timestamp()->defaultExpression('NOW()'),
			'updated_at' => $this->timestamp()->defaultExpression('NOW()'),
		]);
	}
	public function safeDown()
	{
		$this->dropTable('event');
	}
}
?>
<div class="event-form">
	<?php $form =ActiveForm::begin(); ?>
	<?php $form -> fields($model, 'name')->textInput(['maxlength'=>true]) ?>
	<?php $form -> fields($model, 'start_at')->textInput(['type'=>'datetime-local']) ?>
	<?php $form -> fields($model, 'end_at')->textInput(['type'=>'datetime-local']) ?>
	<div class="form-group">
		<?= Html::submitButton('Save',['class'=>'btn btn-success']); ?>
	</div>
	<?php ActiveForm::end(); ?>
</div>