<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;


/**
 * @OA\Post(
 *     path="/api/v1/notebook",
 *     summary = "Создание записи",
 *     tags= {"CRUD записная книжка"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Пример имени"),
 *                     @OA\Property(property="company", type="string", example="Пример компании"),
 *                     @OA\Property(property="phone", type="string", example="Пример телефона"),
 *                     @OA\Property(property="email", type="email", example="test@test.ru"),
 *                     @OA\Property(property="birthdate", type="date", example="01.01.2001"),
 *                     @OA\Property(property="photo", type="string", example="Пример пути до фото"),
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="Успешно",
 *         @OA\JsonContent(
 *                 @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="name", type="string", example="Пример имени"),
 *                 @OA\Property(property="company", type="string", example="Пример компании"),
 *                 @OA\Property(property="phone", type="string", example="Пример телефона"),
 *                 @OA\Property(property="email", type="email", example="test@test.ru"),
 *                 @OA\Property(property="birthdate", type="date", example="01.01.2001"),
 *                 @OA\Property(property="photo", type="string", example="Пример пути до фото"),
 *             )
 *         ),
 *     ),
 * ),
 *
 * @OA\Get(
 *      path="/api/v1/notebook",
 *      summary = "Список записей",
 *      tags= {"CRUD записная книжка"},
 *
 *
 *     @OA\Response(
 *          response=200,
 *          description="Успешно",
 *          @OA\JsonContent(
 *                  @OA\Property(property="data", type="array", @OA\Items(
 *                      @OA\Property(property="id", type="integer", example=1),
 *                      @OA\Property(property="name", type="string", example="Пример имени"),
 *                      @OA\Property(property="company", type="string", example="Пример компании"),
 *                      @OA\Property(property="phone", type="string", example="Пример телефона"),
 *                      @OA\Property(property="email", type="email", example="test@test.ru"),
 *                      @OA\Property(property="birthdate", type="date", example="01.01.2001"),
 *                      @OA\Property(property="photo", type="string", example="Пример пути до фото"),
 *          )),
 *      ),
 *  ),
 *),
 *
 * @OA\Get(
 *       path="/api/v1/notebook/{notebook}",
 *       summary = "Конкретная запись",
 *       tags= {"CRUD записная книжка"},
 *
 *       @OA\Parameter(
 *           description ="ID записи",
 *           in="path",
 *           name="notebook",
 *           required=true,
 *           example= 1,
 *       ),
 *      @OA\Response(
 *           response=200,
 *           description="Успешно",
 *          @OA\JsonContent(
 *                  @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Пример имени"),
 *                  @OA\Property(property="company", type="string", example="Пример компании"),
 *                  @OA\Property(property="phone", type="string", example="Пример телефона"),
 *                  @OA\Property(property="email", type="email", example="test@test.ru"),
 *                  @OA\Property(property="birthdate", type="date", example="01.01.2001"),
 *                  @OA\Property(property="photo", type="string", example="Пример пути до фото"),
 *              ),
 *       ),
 *   ),
 * ),
 *
 * @OA\Patch(
 *        path="/api/v1/notebook/{notebook}",
 *        summary = "Обновление записи",
 *        tags= {"CRUD записная книжка"},
 *
 *        @OA\Parameter(
 *            description ="ID записи",
 *            in="path",
 *            name="notebook",
 *            required=true,
 *            example= 3,
 *        ),
 *     @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="Пример имени"),
 *                      @OA\Property(property="company", type="string", example="Пример компании"),
 *                      @OA\Property(property="phone", type="string", example="Пример телефона"),
 *                      @OA\Property(property="email", type="email", example="test@test.ru"),
 *                      @OA\Property(property="birthdate", type="date", example="01.01.2001"),
 *                      @OA\Property(property="photo", type="string", example="Пример пути до фото"),
 *                  )
 *              }
 *          )
 *      ),
 *       @OA\Response(
 *            response=200,
 *            description="Успешно",
 *           @OA\JsonContent(
 *                   @OA\Property(property="data", type="object",
 *                   @OA\Property(property="id", type="integer", example=1),
 *                   @OA\Property(property="name", type="string", example="Пример имени"),
 *                   @OA\Property(property="company", type="string", example="Пример компании"),
 *                   @OA\Property(property="phone", type="string", example="Пример телефона"),
 *                   @OA\Property(property="email", type="email", example="test@test.ru"),
 *                   @OA\Property(property="birthdate", type="date", example="01.01.2001"),
 *                   @OA\Property(property="photo", type="string", example="Пример пути до фото"),
 *               ),
 *        ),
 *    ),
 *  ),
 * @OA\Delete(
 *        path="/api/v1/notebook/{notebook}",
 *        summary = "Удаление записи",
 *        tags= {"CRUD записная книжка"},
 *
 *        @OA\Parameter(
 *            description ="ID записи",
 *            in="path",
 *            name="notebook",
 *            required=true,
 *            example= 1,
 *        ),
 *       @OA\Response(
 *            response=200,
 *            description="Успешно",
 *           @OA\JsonContent(
 *                   @OA\Property(property="message", type="string", example="done")
 *        ),
 *    ),
 *  ),
 *
 */
class NotebookController extends Controller
{
    //
}
