use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
/**
 * NoteController implements the CRUD actions for Note model.
@@ -95,6 +96,23 @@ public function actionUpdate($id)
        ]);
    }
	/**
	 * Вывод модели в виде json объекта
	 *
	 * @param int $id
	 *
	 * @return array
	 * @throws NotFoundHttpException
	 */
	public function actionJson(int $id): array
	{
		\Yii::$app->getResponse()->format = Response::FORMAT_JSON;
		$note = $this->findModel($id);
		return $note->toArray();
	}
    /**
     * Deletes an existing Note model.
     * If deletion is successful, the browser will be redirected to the 'index' page.