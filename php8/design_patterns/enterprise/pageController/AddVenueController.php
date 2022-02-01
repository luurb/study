<?php

namespace enterprise\pageController;

class AddVenueController extends PageController
{
    public function process(): void
    {
        $request = $this->getRequest();

        try {
            $name = $request->getProperty('venue_name');

            if (is_null($request->getProperty('submitted'))) {
                $request->addFeedback("choose a name for the venue");
                $this->render(__DIR__ . '/view/add_venue.php', $request);
            } elseif (empty($name)) {
                $request->addFeedback("name is required field");
                $this->render(__DIR__ . '/view/add_venue.php', $request);

                return;
            } else {
                $request->addFeedback($request->getProperty('venue_name'));
                $this->render(__DIR__ . '/view/add_venue.php', $request);
            }
        } catch (\Exception) {
            $this->render(__DIR__ . '/view/error.php', $request);
        }
    }
}