<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'name'                         => 'First Name',
            'name_helper'                  => ' ',
            'email'                        => 'Email',
            'email_helper'                 => ' ',
            'email_verified_at'            => 'Email verified at',
            'email_verified_at_helper'     => ' ',
            'password'                     => 'Password',
            'password_helper'              => ' ',
            'roles'                        => 'Roles',
            'roles_helper'                 => ' ',
            'remember_token'               => 'Remember Token',
            'remember_token_helper'        => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
            'verified'                     => 'Verified',
            'verified_helper'              => ' ',
            'verified_at'                  => 'Verified at',
            'verified_at_helper'           => ' ',
            'verification_token'           => 'Verification token',
            'verification_token_helper'    => ' ',
            'two_factor'                   => 'Two-Factor Auth',
            'two_factor_helper'            => ' ',
            'two_factor_code'              => 'Two-factor code',
            'two_factor_code_helper'       => ' ',
            'two_factor_expires_at'        => 'Two-factor expires at',
            'two_factor_expires_at_helper' => ' ',
            'profile_photo'                => 'Profile Photo',
            'profile_photo_helper'         => ' ',
            'state'                        => 'State',
            'state_helper'                 => ' ',
            'city'                         => 'City',
            'city_helper'                  => ' ',
            'expiry'                       => 'Expiry',
            'expiry_helper'                => ' ',
            'country'                      => 'Country',
            'country_helper'               => ' ',
            'zip'                          => 'Zip',
            'zip_helper'                   => ' ',
            'conscent'                     => 'I agree to the ',
            'conscent_helper'              => ' ',
            'banned'                       => 'Banned',
            'banned_helper'                => ' ',
            'last_name'                    => 'Last Name',
            'last_name_helper'             => ' ',
            'bio'                          => 'Bio',
            'bio_helper'                   => ' ',
            'email_notification'           => 'Email Notification',
            'email_notification_helper'    => ' ',
            'sms_notification'             => 'SMS Notification',
            'sms_notification_helper'      => ' ',
        ],
    ],
    'service' => [
        'title'          => 'Services',
        'title_singular' => 'Service',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'icon'              => 'Icon',
            'icon_helper'       => ' ',
            'active'            => 'Active',
            'active_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'animal' => [
        'title'          => 'Animal',
        'title_singular' => 'Animal',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'animal'            => 'Animal',
            'animal_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'pet' => [
        'title'          => 'My Pets',
        'title_singular' => 'My Pet',
        'my_pets'       => 'My Pets',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'animal'                 => 'Is your pet a cat or a dog?',
            'animal_helper'          => ' ',
            'id_helper'              => ' ',
            'gender'                 => 'Gender',
            'gender_helper'          => ' ',
            'name'                   => 'Your pets name',
            'name_helper'            => ' ',
            'size'                   => 'What size is your pet (lbs)?',
            'size_helper'            => ' ',
            'age'                    => 'How old is your pet?',
            'age_helper'             => ' ',
            'gets_along_with'        => 'Gets Along With',
            'gets_along_with_helper' => ' ',
            'is_immunized'           => 'Is Immunized?',
            'is_immunized_helper'    => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'photos'                 => 'Add your pet photo here',
            'photos_helper'          => ' ',
            'breed'                  => 'Breed',
            'breed_helper'           => ' ',
            'user'                   => 'User',
            'user_helper'            => ' ',
        ],
    ],
    'userAlert' => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'credit' => [
        'title'          => 'Credits',
        'title_singular' => 'Credit',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'points'                 => 'Points',
            'points_helper'          => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'service_request'        => 'Service Request',
            'service_request_helper' => ' ',
            'user'                   => 'User',
            'user_helper'            => ' ',
        ],
    ],
    'serviceRequest' => [
        'title'          => 'Requests',
        'mark_as_completed' => 'Mark as Completed',
        'title_singular' => 'Request',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'service'           => 'Service',
            'service_helper'    => ' ',
            'pet'               => 'Pet',
            'pet_helper'        => ' ',
            'zip_code'          => 'Zip Code',
            'zip_code_helper'   => ' ',
            'from'              => 'From',
            'from_helper'       => ' ',
            'to'                => 'To',
            'to_helper'         => ' ',
            'closed'            => 'Closed',
            'closed_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'comments'          => 'Comments',
            'comments_helper'   => ' Tell us about any changes in your pets diet, habits, special needs, behaviour and anything your care provider needs to know. Your pet will be rated at the end of the service based on the information you provide here.',
            'user'              => 'User',
            'user_helper'       => ' ',
            'pending'           => 'Pending',
            'pending_helper'    => ' ',
            'submit_request'    => 'Submit Request',
            'status'         => [
                'closed'                => 'Closed',
                'expired'         => 'Expired ',
                'pending'         => 'Pending',
                'completed'       => 'Completed',
                'in_progress'     => 'In Progress',
                'cancelled'       => 'Cancelled',
                'declined'        => 'Declined',
                'accepted'        => 'Accepted',
                'new'             => 'New',
                'booked'      => 'Booked',

            ],
        ],
    ],
    'booking' => [
        'title'          => 'Bookings',
        'title_singular' => 'Booking',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'service_request'        => 'Service Request',
            'service_request_helper' => ' ',
            'decline'                => 'Decline',
            'decline_helper'         => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'user'                   => 'User',
            'user_helper'            => ' ',
        ],
    ],
    'review' => [
        'title'          => 'Reviews',
        'title_singular' => 'Review',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'service_request'        => 'Service Request',
            'service_request_helper' => ' ',
            'rating'                 => 'Rating',
            'rating_helper'          => ' ',
            'comment'                => 'Comment',
            'comment_helper'         => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'user'                   => 'User',
            'user_helper'            => ' ',
        ],
    ],
    'availability' => [
        'title'          => 'Availability',
        'title_singular' => 'Availability',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'zip_code'          => 'What is your current zip code',
            'zip_code_helper'   => ' ',
            'message'           => 'Tell us about your availability',
            'message_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'service'           => 'Which service can you provide',
            'service_helper'    => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'date_from'         => 'Select a start date',
            'date_from_helper'  => ' ',
            'date_to'           => 'Select an end date',
            'date_to_helper'    => ' ',

        ],
    ],
    'photoUpdate' => [
        'title'          => 'Photo Updates',
        'title_singular' => 'Photo Update',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'booking'           => 'Booking',
            'booking_helper'    => ' ',
            'photo'             => 'Photo',
            'photo_helper'      => ' ',
            'comment'           => 'Comment',
            'comment_helper'    => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'cashout' => [
        'title'          => 'Cashout',
        'title_singular' => 'Cashout',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'credits'           => 'Credits',
            'credits_helper'    => ' ',
            'amount'            => 'Amount',
            'amount_helper'     => ' ',
            'issued'            => 'Issued',
            'issued_helper'     => ' ',
            'tracking'          => 'Tracking',
            'tracking_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],

    'petReview' => [
        'title'          => 'Pet Reviews',
        'title_singular' => 'Pet Review',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'pet'               => 'Pet',
            'pet_helper'        => ' ',
            'booking'           => 'Booking',
            'booking_helper'    => ' ',
            'comment'           => 'Comment',
            'comment_helper'    => ' ',
            'rating'            => 'Rating',
            'rating_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],


];
