<?php

namespace buga1234\modules\UserManagement\controllers;

use Yii;
use buga1234\modules\UserManagement\models\UserVisitLog;
use buga1234\modules\UserManagement\models\search\UserVisitLogSearch;
use buga1234\components\AdminDefaultController;

/**
 * UserVisitLogController implements the CRUD actions for UserVisitLog model.
 */
class UserVisitLogController extends AdminDefaultController
{
	/**
	 * @var UserVisitLog
	 */
	public $modelClass = 'buga1234\modules\UserManagement\models\UserVisitLog';

	/**
	 * @var UserVisitLogSearch
	 */
	public $modelSearchClass = 'buga1234\modules\UserManagement\models\search\UserVisitLogSearch';

	public $enableOnlyActions = ['index', 'view', 'grid-page-size'];
}
