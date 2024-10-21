<?php

return [
    'extended' => [
        '@reboot' => 'מופעל פעם אחת באתחול',
    ],
    'minutes' => [
        'every' => 'כל דקה',
        'increment' => 'כל :increment דקות',
        'times_per_increment' => ':times כל :increment דקות',
        'multiple' => ':times בשעה',
    ],
    'hours' => [
        'every' => 'כל שעה',
        'once_an_hour' => 'פעם אחת בשעה',
        'increment' => 'כל :increment שעות',
        'multiple_per_increment' => ':count שעות כל :increment',
        'times_per_increment' => ':times כל :increment שעות',
        'increment_chained' => 'בכל :increment שעות',
        'multiple_per_day' => ':count שעות ביום',
        'times_per_day' => ':times ביום',
        'once_at_time' => 'ב-:time',
    ],
    'days_of_month' => [
        'every' => 'כל יום',
        'increment' => 'כל :increment ימים',
        'multiple_per_increment' => ':count ימים מתוך :increment',
        'multiple_per_month' => ':count ימים בחודש',
        'once_on_day' => 'ב-:day',
        'every_on_day' => 'ב-:day בכל חודש',
    ],
    'months' => [
        'every' => 'כל חודש',
        'every_on_day' => 'ב-:day בכל חודש',
        'increment' => 'כל :increment חודשים',
        'multiple_per_increment' => ':count חודשים מתוך :increment',
        'multiple_per_year' => ':count חודשים בשנה',
        'once_on_month' => 'ב-:month',
        'once_on_day' => 'ב-:month ב-:day',
    ],
    'days_of_week' => [
        'every' => 'every :weekday',
        'increment' => 'כל :increment ימים בשבוע',
        'multiple_per_increment' => ':count ימים בשבוע מתוך :increment',
        'multiple_days_a_week' => ':count ימים בשבוע',
        'once_on_day' => 'ב-:days',
    ],
    'years' => [
        'every' => 'כל שנה',
    ],
    'times' => [
        'am' => 'לפנה״צ',
        'pm' => 'אחה״צ',
    ],
];
