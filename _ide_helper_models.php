<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Position
 *
 * @property int $id
 * @property int $mmsi
 * @property bool $status
 * @property int $station_id
 * @property int $speed
 * @property string $longitude
 * @property string $latitude
 * @property int $course
 * @property int $heading
 * @property string|null $rot
 * @property int $timestamp
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Position newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Position newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Position query()
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereCourse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereMmsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereRot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereStationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position withFilter($filter = [])
 */
	class Position extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

