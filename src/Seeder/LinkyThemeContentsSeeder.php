<?php

namespace Database\Seeders\Badaso\LinkyTheme;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Module\Content\Models\Content;

class LinkyThemeContentsSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
        \DB::beginTransaction();
        try {
            $contents = [
                0 => [
                    'slug' => 'linky',
                    'label' => 'Linky',
                    'value' => '{
                         "navbarlink": {
                "name": "navbarlink",
                "label": "Navbar Link",
                "type": "group",
                "data": {
                    "logo": {
                        "name": "logo",
                        "label": "Logo",
                        "type": "image",
                        "data": "photos/1/team1.jpeg"
                    },
                    "titlelogo": {
                        "name": "titlelogo",
                        "label": "Title Logo",
                        "type": "text",
                        "data": "@marcellio"
                    }
                }
            },
            "listlink": {
                "name": "listlink",
                "label": "List Link",
                "type": "array",
                "data": [
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Out Now : One Pan Perfect + Bonus Gift"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": "Google Play"
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://badaso-demo.uatech.co.id/",
                                "text": "Google Play"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Find a recipe from marcellio.com"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": null
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://badaso-demo.uatech.co.id/",
                                "text": "Telegram"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Subscribe to marcellio.com"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": null
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://badaso-demo.uatech.co.id/",
                                "text": "Gotrade"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Register for Marcellios free online Independents Masterclass"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": null
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://badaso-demo.uatech.co.id/",
                                "text": "marcellio"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Shop Handmade Marcellio Pudding"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": null
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://badaso-demo.uatech.co.id/",
                                "text": "Handmade"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Upside Down Summer Palova"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": null
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://badaso-demo.uatech.co.id/",
                                "text": "summer"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Youtube Channel"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": null
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://badaso-demo.uatech.co.id/",
                                "text": "channel youtube"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Merchandise"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": null
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://badaso-demo.uatech.co.id/",
                                "text": "merchandise"
                            }
                        }
                    },
                    {
                        "title": {
                            "name": "title",
                            "label": "title",
                            "type": "text",
                            "data": "Official Website"
                        },
                        "subtitle": {
                            "name": "subtitle",
                            "label": "subtitle",
                            "type": "text",
                            "data": "marcellio.com"
                        },
                        "url": {
                            "name": "url",
                            "label": "url",
                            "type": "url",
                            "data": {
                                "url": "https://badaso-demo.uatech.co.id/",
                                "text": "official website"
                            }
                        }
                    }
                ]
            },
            "copyright": {
                "name": "copyright",
                "label": "Copyright",
                "type": "text",
                "data": "© Copyright 2022 | Linky Theme by  UASOFT | All Rights Reserved | Powered by UASOFT"
            }
                    }'
                ],
            ];



            foreach ($contents as $key => $content) {
                Content::where('slug', $content['slug'])->delete();
                Content::create($content);
            }

            DB::commit();
        } catch (Exception $e) {
            \DB::rollBack();

            throw new Exception('Exception occur ' . $e);
        }
    }
}
