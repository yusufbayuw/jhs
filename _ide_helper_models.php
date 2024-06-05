<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Booking
 *
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking query()
 */
	class Booking extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Facility
 *
 * @property-read \App\Models\Hotel|null $hotel
 * @method static \Illuminate\Database\Eloquent\Builder|Facility newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facility newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facility query()
 */
	class Facility extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Feedback
 *
 * @property-read \App\Models\Payment|null $payment
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback query()
 */
	class Feedback extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FinancialRecord
 *
 * @property-read \App\Models\Hotel|null $hotel
 * @method static \Illuminate\Database\Eloquent\Builder|FinancialRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FinancialRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FinancialRecord query()
 */
	class FinancialRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Hotel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel query()
 */
	class Hotel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MarketingCampaign
 *
 * @property-read \App\Models\Hotel|null $hotel
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingCampaign newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingCampaign newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingCampaign query()
 */
	class MarketingCampaign extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OperationLog
 *
 * @property-read \App\Models\Hotel|null $hotel
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|OperationLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OperationLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OperationLog query()
 */
	class OperationLog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Payment
 *
 * @property-read \App\Models\Booking|null $booking
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 */
	class Payment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RiskManagement
 *
 * @property-read \App\Models\Hotel|null $hotel
 * @method static \Illuminate\Database\Eloquent\Builder|RiskManagement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RiskManagement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RiskManagement query()
 */
	class RiskManagement extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Room
 *
 * @property-read \App\Models\Hotel|null $hotel
 * @method static \Illuminate\Database\Eloquent\Builder|Room newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Room newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Room query()
 */
	class Room extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SalesRecord
 *
 * @property-read \App\Models\Hotel|null $hotel
 * @method static \Illuminate\Database\Eloquent\Builder|SalesRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesRecord query()
 */
	class SalesRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property int|null $unit_id
 * @property int|null $golongan_id
 * @property int|null $jabatan_id
 * @property string $name
 * @property string|null $email
 * @property string|null $username
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed|null $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $gruop_penilaian
 * @property int|null $tingkat_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Edwink\FilamentUserActivity\Models\UserActivity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Hotel|null $hotel
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGolonganId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGruopPenilaian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereJabatanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTingkatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 */
	class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser {}
}

