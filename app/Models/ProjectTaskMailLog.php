<?php


namespace App\Models;



/**
 * App\Models\ProjectTaskMailLog
 *
 * @property int $id
 * @property int|null $userid 用户id
 * @property int|null $task_id 任务id
 * @property string|null $email 电子邮箱
 * @property int|null $type 提醒类型：1第一次任务提醒，2第二次任务超期提醒
 * @property int|null $is_send 邮件发送是否成功：0否，1是
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTaskMailLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTaskMailLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTaskMailLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTaskMailLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTaskMailLog whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTaskMailLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTaskMailLog whereIsSend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTaskMailLog whereTaskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTaskMailLog whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTaskMailLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTaskMailLog whereUserid($value)
 * @mixin \Eloquent
 */
class ProjectTaskMailLog extends AbstractModel
{


}
