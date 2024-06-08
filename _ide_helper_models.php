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
 * @property int $id
 * @property int|null $user_id
 * @property int|null $room_id
 * @property string $check_in_date
 * @property string|null $check_out_date
 * @property string|null $date
 * @property int|null $number_of_days
 * @property string|null $amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Room|null $room
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking query()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereCheckInDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereCheckOutDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereNumberOfDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereUserId($value)
 */
	class Booking extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Facility
 *
 * @property int $id
 * @property int|null $hotel_id
 * @property string $name
 * @property string|null $description
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Hotel|null $hotel
 * @method static \Illuminate\Database\Eloquent\Builder|Facility newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facility newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facility query()
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereUpdatedAt($value)
 */
	class Facility extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Feedback
 *
 * @property int $id
 * @property int|null $payment_id
 * @property int $rating
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Payment|null $payment
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereUpdatedAt($value)
 */
	class Feedback extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FinancialRecord
 *
 * @property int $id
 * @property int|null $hotel_id
 * @property string|null $amount
 * @property string|null $type
 * @property string|null $date
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Hotel|null $hotel
 * @method static \Illuminate\Database\Eloquent\Builder|FinancialRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FinancialRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FinancialRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|FinancialRecord whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FinancialRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FinancialRecord whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FinancialRecord whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FinancialRecord whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FinancialRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FinancialRecord whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FinancialRecord whereUpdatedAt($value)
 */
	class FinancialRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Hotel
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $city
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Room> $room
 * @property-read int|null $room_count
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereUpdatedAt($value)
 */
	class Hotel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MarketingCampaign
 *
 * @property int $id
 * @property int|null $hotel_id
 * @property string $name
 * @property string|null $start
 * @property string|null $end
 * @property string|null $budget
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Hotel|null $hotel
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingCampaign newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingCampaign newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingCampaign query()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingCampaign whereBudget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingCampaign whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingCampaign whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingCampaign whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingCampaign whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingCampaign whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingCampaign whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingCampaign whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingCampaign whereUpdatedAt($value)
 */
	class MarketingCampaign extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OperationLog
 *
 * @property int $id
 * @property int|null $hotel_id
 * @property int|null $user_id
 * @property string|null $description
 * @property string|null $date
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Hotel|null $hotel
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|OperationLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OperationLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OperationLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|OperationLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperationLog whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperationLog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperationLog whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperationLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperationLog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperationLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperationLog whereUserId($value)
 */
	class OperationLog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Payment
 *
 * @property int $id
 * @property int|null $booking_id
 * @property string|null $date
 * @property string|null $amount
 * @property string|null $method
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Booking|null $booking
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereBookingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 */
	class Payment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RiskManagement
 *
 * @property int $id
 * @property int|null $hotel_id
 * @property string|null $description
 * @property string|null $date
 * @property string|null $level
 * @property string|null $mitigation_plan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Hotel|null $hotel
 * @method static \Illuminate\Database\Eloquent\Builder|RiskManagement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RiskManagement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RiskManagement query()
 * @method static \Illuminate\Database\Eloquent\Builder|RiskManagement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiskManagement whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiskManagement whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiskManagement whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiskManagement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiskManagement whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiskManagement whereMitigationPlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RiskManagement whereUpdatedAt($value)
 */
	class RiskManagement extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Room
 *
 * @property int $id
 * @property int|null $hotel_id
 * @property string $name
 * @property string|null $type
 * @property string|null $price_per_night
 * @property string|null $facility
 * @property string|null $description
 * @property int|null $number
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Hotel|null $hotel
 * @method static \Illuminate\Database\Eloquent\Builder|Room newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Room newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Room query()
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereFacility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room wherePricePerNight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereUpdatedAt($value)
 */
	class Room extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SalesRecord
 *
 * @property int $id
 * @property int|null $hotel_id
 * @property string $amount
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Hotel|null $hotel
 * @method static \Illuminate\Database\Eloquent\Builder|SalesRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesRecord whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesRecord whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesRecord whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesRecord whereUpdatedAt($value)
 */
	class SalesRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property int|null $hotel_id
 * @property string $name
 * @property string|null $email
 * @property string|null $username
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed|null $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
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
 * @method static \Illuminate\Database\Eloquent\Builder|User whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 */
	class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser {}
}

