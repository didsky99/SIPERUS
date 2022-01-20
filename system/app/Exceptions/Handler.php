<?php namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler {

	/**
	 * A list of the exception types that should not be reported.
	 *
	 * @var array
	 */
	protected $dontReport = [
		'Symfony\Component\HttpKernel\Exception\HttpException'
	];

	/**
	 * Report or log an exception.
	 *
	 * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
	 *
	 * @param  \Exception  $e
	 * @return void
	 */
	public function report(Exception $e)
	{
		return parent::report($e);
	}

	/**
	 * Render an exception into an HTTP response.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Exception  $e
	 * @return \Illuminate\Http\Response
	 */
	public function render($request, Exception $e)
	{
		/*if ($e instanceof ModelNotFoundException)
        {
            return echo 'unimplement check app/exception/handler';
            return parent::render($request, $e);
        }*/
		if($e instanceof NotFoundHttpException) { 
			return response()->view('errors.503', [], 404); // this view if route not found
		} else {			
			return parent::render($request, $e);
		}

	}

}
