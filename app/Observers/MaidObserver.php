<?php

namespace App\Observers;

use App\Models\Maid;

class MaidObserver
{
    public function created(Maid $maid): void
    {
        if (!isset($maid->getTranslations()['languages']['ar'])) {
            $maid->setTranslation("languages", "ar", []);
        }
        if (!isset($maid->getTranslations()['languages']['en'])) {
            $maid->setTranslation("languages", "en", []);
        }

        if (!isset($maid->getTranslations()['countries']['ar'])) {
            $maid->setTranslation("countries", "ar", []);
        }
        if (!isset($maid->getTranslations()['countries']['en'])) {
            $maid->setTranslation("countries", "en", []);
        }

        $maid->save();
    }
}
