<?php
// This file was auto-generated from sdk-root/src/data/lex-models/2017-04-19/examples-1.json
return [ 'version' => '1.0', 'examples' => [ 'GetBot' => [ [ 'input' => [ 'name' => 'DocOrderPizza', 'versionOrAlias' => '$LATEST', ], 'output' => [ 'version' => '$LATEST', 'name' => 'DocOrderPizzaBot', 'abortStatement' => [ 'messages' => [ [ 'content' => 'I don\'t understand. Can you try again?', 'contentType' => 'PlainText', ], [ 'content' => 'I\'m sorry, I don\'t understand.', 'contentType' => 'PlainText', ], ], ], 'checksum' => '20172ee3-fa06-49b2-bbc5-667c090303e9', 'childDirected' => true, 'clarificationPrompt' => [ 'maxAttempts' => 1, 'messages' => [ [ 'content' => 'I\'m sorry, I didn\'t hear that. Can you repeate what you just said?', 'contentType' => 'PlainText', ], [ 'content' => 'Can you say that again?', 'contentType' => 'PlainText', ], ], ], 'createdDate' => 1494360160.1329999, 'description' => 'Orders a pizza from a local pizzeria.', 'idleSessionTTLInSeconds' => 300, 'intents' => [ [ 'intentName' => 'DocOrderPizza', 'intentVersion' => '$LATEST', ], ], 'lastUpdatedDate' => 1494360160.1329999, 'locale' => 'en-US', 'status' => 'NOT_BUILT', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example shows how to get configuration information for a bot.', 'id' => 'to-get-information-about-a-bot-1494431724188', 'title' => 'To get information about a bot', ], ], 'GetBots' => [ [ 'input' => [ 'maxResults' => 5, 'nextToken' => '', ], 'output' => [ 'bots' => [ [ 'version' => '$LATEST', 'name' => 'DocOrderPizzaBot', 'createdDate' => 1494360160.1329999, 'description' => 'Orders a pizza from a local pizzeria.', 'lastUpdatedDate' => 1494360160.1329999, 'status' => 'NOT_BUILT', ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example shows how to get a list of all of the bots in your account.', 'id' => 'to-get-a-list-of-bots-1494432220036', 'title' => 'To get a list of bots', ], ], 'GetIntent' => [ [ 'input' => [ 'version' => '$LATEST', 'name' => 'DocOrderPizza', ], 'output' => [ 'version' => '$LATEST', 'name' => 'DocOrderPizza', 'checksum' => 'ca9bc13d-afc8-4706-bbaf-091f7a5935d6', 'conclusionStatement' => [ 'messages' => [ [ 'content' => 'All right, I ordered you a {Crust} crust {Type} pizza with {Sauce} sauce.', 'contentType' => 'PlainText', ], [ 'content' => 'OK, your {Crust} crust {Type} pizza with {Sauce} sauce is on the way.', 'contentType' => 'PlainText', ], ], 'responseCard' => 'foo', ], 'confirmationPrompt' => [ 'maxAttempts' => 1, 'messages' => [ [ 'content' => 'Should I order your {Crust} crust {Type} pizza with {Sauce} sauce?', 'contentType' => 'PlainText', ], ], ], 'createdDate' => 1494359783.4530001, 'description' => 'Order a pizza from a local pizzeria.', 'fulfillmentActivity' => [ 'type' => 'ReturnIntent', ], 'lastUpdatedDate' => 1494359783.4530001, 'rejectionStatement' => [ 'messages' => [ [ 'content' => 'Ok, I\'ll cancel your order.', 'contentType' => 'PlainText', ], [ 'content' => 'I cancelled your order.', 'contentType' => 'PlainText', ], ], ], 'sampleUtterances' => [ 'Order me a pizza.', 'Order me a {Type} pizza.', 'I want a {Crust} crust {Type} pizza', 'I want a {Crust} crust {Type} pizza with {Sauce} sauce.', ], 'slots' => [ [ 'name' => 'Type', 'description' => 'The type of pizza to order.', 'priority' => 1, 'sampleUtterances' => [ 'Get me a {Type} pizza.', 'A {Type} pizza please.', 'I\'d like a {Type} pizza.', ], 'slotConstraint' => 'Required', 'slotType' => 'DocPizzaType', 'slotTypeVersion' => '$LATEST', 'valueElicitationPrompt' => [ 'maxAttempts' => 1, 'messages' => [ [ 'content' => 'What type of pizza would you like?', 'contentType' => 'PlainText', ], [ 'content' => 'Vegie or cheese pizza?', 'contentType' => 'PlainText', ], [ 'content' => 'I can get you a vegie or a cheese pizza.', 'contentType' => 'PlainText', ], ], ], ], [ 'name' => 'Crust', 'description' => 'The type of pizza crust to order.', 'priority' => 2, 'sampleUtterances' => [ 'Make it a {Crust} crust.', 'I\'d like a {Crust} crust.', ], 'slotConstraint' => 'Required', 'slotType' => 'DocPizzaCrustType', 'slotTypeVersion' => '$LATEST', 'valueElicitationPrompt' => [ 'maxAttempts' => 1, 'messages' => [ [ 'content' => 'What type of crust would you like?', 'contentType' => 'PlainText', ], [ 'content' => 'Thick or thin crust?', 'contentType' => 'PlainText', ], ], ], ], [ 'name' => 'Sauce', 'description' => 'The type of sauce to use on the pizza.', 'priority' => 3, 'sampleUtterances' => [ 'Make it {Sauce} sauce.', 'I\'d like {Sauce} sauce.', ], 'slotConstraint' => 'Required', 'slotType' => 'DocPizzaSauceType', 'slotTypeVersion' => '$LATEST', 'valueElicitationPrompt' => [ 'maxAttempts' => 1, 'messages' => [ [ 'content' => 'White or red sauce?', 'contentType' => 'PlainText', ], [ 'content' => 'Garlic or tomato sauce?', 'contentType' => 'PlainText', ], ], ], ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example shows how to get information about an intent.', 'id' => 'to-get-a-information-about-an-intent-1494432574147', 'title' => 'To get a information about an intent', ], ], 'GetIntents' => [ [ 'input' => [ 'maxResults' => 10, 'nextToken' => '', ], 'output' => [ 'intents' => [ [ 'version' => '$LATEST', 'name' => 'DocOrderPizza', 'createdDate' => 1494359783.4530001, 'description' => 'Order a pizza from a local pizzeria.', 'lastUpdatedDate' => 1494359783.4530001, ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example shows how to get a list of all of the intents in your account.', 'id' => 'to-get-a-list-of-intents-1494432416363', 'title' => 'To get a list of intents', ], ], 'GetSlotType' => [ [ 'input' => [ 'version' => '$LATEST', 'name' => 'DocPizzaCrustType', ], 'output' => [ 'version' => '$LATEST', 'name' => 'DocPizzaCrustType', 'checksum' => '210b3d5a-90a3-4b22-ac7e-f50c2c71095f', 'createdDate' => 1494359274.4030001, 'description' => 'Available crust types', 'enumerationValues' => [ [ 'value' => 'thick', ], [ 'value' => 'thin', ], ], 'lastUpdatedDate' => 1494359274.4030001, ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example shows how to get information about a slot type.', 'id' => 'to-get-information-about-a-slot-type-1494432961004', 'title' => 'To get information about a slot type', ], ], 'GetSlotTypes' => [ [ 'input' => [ 'maxResults' => 10, 'nextToken' => '', ], 'output' => [ 'slotTypes' => [ [ 'version' => '$LATEST', 'name' => 'DocPizzaCrustType', 'createdDate' => 1494359274.4030001, 'description' => 'Available crust types', 'lastUpdatedDate' => 1494359274.4030001, ], [ 'version' => '$LATEST', 'name' => 'DocPizzaSauceType', 'createdDate' => 1494356442.23, 'description' => 'Available pizza sauces', 'lastUpdatedDate' => 1494356442.23, ], [ 'version' => '$LATEST', 'name' => 'DocPizzaType', 'createdDate' => 1494359198.6559999, 'description' => 'Available pizzas', 'lastUpdatedDate' => 1494359198.6559999, ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example shows how to get a list of all of the slot types in your account.', 'id' => 'to-get-a-list-of-slot-types-1494432757458', 'title' => 'To get a list of slot types', ], ], 'PutBot' => [ [ 'input' => [ 'name' => 'DocOrderPizzaBot', 'abortStatement' => [ 'messages' => [ [ 'content' => 'I don\'t understand. Can you try again?', 'contentType' => 'PlainText', ], [ 'content' => 'I\'m sorry, I don\'t understand.', 'contentType' => 'PlainText', ], ], ], 'childDirected' => true, 'clarificationPrompt' => [ 'maxAttempts' => 1, 'messages' => [ [ 'content' => 'I\'m sorry, I didn\'t hear that. Can you repeat what you just said?', 'contentType' => 'PlainText', ], [ 'content' => 'Can you say that again?', 'contentType' => 'PlainText', ], ], ], 'description' => 'Orders a pizza from a local pizzeria.', 'idleSessionTTLInSeconds' => 300, 'intents' => [ [ 'intentName' => 'DocOrderPizza', 'intentVersion' => '$LATEST', ], ], 'locale' => 'en-US', 'processBehavior' => 'SAVE', ], 'output' => [ 'version' => '$LATEST', 'name' => 'DocOrderPizzaBot', 'abortStatement' => [ 'messages' => [ [ 'content' => 'I don\'t understand. Can you try again?', 'contentType' => 'PlainText', ], [ 'content' => 'I\'m sorry, I don\'t understand.', 'contentType' => 'PlainText', ], ], ], 'checksum' => '20172ee3-fa06-49b2-bbc5-667c090303e9', 'childDirected' => true, 'clarificationPrompt' => [ 'maxAttempts' => 1, 'messages' => [ [ 'content' => 'I\'m sorry, I didn\'t hear that. Can you repeate what you just said?', 'contentType' => 'PlainText', ], [ 'content' => 'Can you say that again?', 'contentType' => 'PlainText', ], ], ], 'createdDate' => 1494360160.1329999, 'description' => 'Orders a pizza from a local pizzeria.', 'idleSessionTTLInSeconds' => 300, 'intents' => [ [ 'intentName' => 'DocOrderPizza', 'intentVersion' => '$LATEST', ], ], 'lastUpdatedDate' => 1494360160.1329999, 'locale' => 'en-US', 'status' => 'NOT_BUILT', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example shows how to create a bot for ordering pizzas.', 'id' => 'to-create-a-bot-1494360003886', 'title' => 'To create a bot', ], ], 'PutIntent' => [ [ 'input' => [ 'name' => 'DocOrderPizza', 'conclusionStatement' => [ 'messages' => [ [ 'content' => 'All right, I ordered you a {Crust} crust {Type} pizza with {Sauce} sauce.', 'contentType' => 'PlainText', ], [ 'content' => 'OK, your {Crust} crust {Type} pizza with {Sauce} sauce is on the way.', 'contentType' => 'PlainText', ], ], 'responseCard' => 'foo', ], 'confirmationPrompt' => [ 'maxAttempts' => 1, 'messages' => [ [ 'content' => 'Should I order your {Crust} crust {Type} pizza with {Sauce} sauce?', 'contentType' => 'PlainText', ], ], ], 'description' => 'Order a pizza from a local pizzeria.', 'fulfillmentActivity' => [ 'type' => 'ReturnIntent', ], 'rejectionStatement' => [ 'messages' => [ [ 'content' => 'Ok, I\'ll cancel your order.', 'contentType' => 'PlainText', ], [ 'content' => 'I cancelled your order.', 'contentType' => 'PlainText', ], ], ], 'sampleUtterances' => [ 'Order me a pizza.', 'Order me a {Type} pizza.', 'I want a {Crust} crust {Type} pizza', 'I want a {Crust} crust {Type} pizza with {Sauce} sauce.', ], 'slots' => [ [ 'name' => 'Type', 'description' => 'The type of pizza to order.', 'priority' => 1, 'sampleUtterances' => [ 'Get me a {Type} pizza.', 'A {Type} pizza please.', 'I\'d like a {Type} pizza.', ], 'slotConstraint' => 'Required', 'slotType' => 'DocPizzaType', 'slotTypeVersion' => '$LATEST', 'valueElicitationPrompt' => [ 'maxAttempts' => 1, 'messages' => [ [ 'content' => 'What type of pizza would you like?', 'contentType' => 'PlainText', ], [ 'content' => 'Vegie or cheese pizza?', 'contentType' => 'PlainText', ], [ 'content' => 'I can get you a vegie or a cheese pizza.', 'contentType' => 'PlainText', ], ], ], ], [ 'name' => 'Crust', 'description' => 'The type of pizza crust to order.', 'priority' => 2, 'sampleUtterances' => [ 'Make it a {Crust} crust.', 'I\'d like a {Crust} crust.', ], 'slotConstraint' => 'Required', 'slotType' => 'DocPizzaCrustType', 'slotTypeVersion' => '$LATEST', 'valueElicitationPrompt' => [ 'maxAttempts' => 1, 'messages' => [ [ 'content' => 'What type of crust would you like?', 'contentType' => 'PlainText', ], [ 'content' => 'Thick or thin crust?', 'contentType' => 'PlainText', ], ], ], ], [ 'name' => 'Sauce', 'description' => 'The type of sauce to use on the pizza.', 'priority' => 3, 'sampleUtterances' => [ 'Make it {Sauce} sauce.', 'I\'d like {Sauce} sauce.', ], 'slotConstraint' => 'Required', 'slotType' => 'DocPizzaSauceType', 'slotTypeVersion' => '$LATEST', 'valueElicitationPrompt' => [ 'maxAttempts' => 1, 'messages' => [ [ 'content' => 'White or red sauce?', 'contentType' => 'PlainText', ], [ 'content' => 'Garlic or tomato sauce?', 'contentType' => 'PlainText', ], ], ], ], ], ], 'output' => [ 'version' => '$LATEST', 'name' => 'DocOrderPizza', 'checksum' => 'ca9bc13d-afc8-4706-bbaf-091f7a5935d6', 'conclusionStatement' => [ 'messages' => [ [ 'content' => 'All right, I ordered you a {Crust} crust {Type} pizza with {Sauce} sauce.', 'contentType' => 'PlainText', ], [ 'content' => 'OK, your {Crust} crust {Type} pizza with {Sauce} sauce is on the way.', 'contentType' => 'PlainText', ], ], 'responseCard' => 'foo', ], 'confirmationPrompt' => [ 'maxAttempts' => 1, 'messages' => [ [ 'content' => 'Should I order your {Crust} crust {Type} pizza with {Sauce} sauce?', 'contentType' => 'PlainText', ], ], ], 'createdDate' => 1494359783.4530001, 'description' => 'Order a pizza from a local pizzeria.', 'fulfillmentActivity' => [ 'type' => 'ReturnIntent', ], 'lastUpdatedDate' => 1494359783.4530001, 'rejectionStatement' => [ 'messages' => [ [ 'content' => 'Ok, I\'ll cancel your order.', 'contentType' => 'PlainText', ], [ 'content' => 'I cancelled your order.', 'contentType' => 'PlainText', ], ], ], 'sampleUtterances' => [ 'Order me a pizza.', 'Order me a {Type} pizza.', 'I want a {Crust} crust {Type} pizza', 'I want a {Crust} crust {Type} pizza with {Sauce} sauce.', ], 'slots' => [ [ 'name' => 'Sauce', 'description' => 'The type of sauce to use on the pizza.', 'priority' => 3, 'sampleUtterances' => [ 'Make it {Sauce} sauce.', 'I\'d like {Sauce} sauce.', ], 'slotConstraint' => 'Required', 'slotType' => 'DocPizzaSauceType', 'slotTypeVersion' => '$LATEST', 'valueElicitationPrompt' => [ 'maxAttempts' => 1, 'messages' => [ [ 'content' => 'White or red sauce?', 'contentType' => 'PlainText', ], [ 'content' => 'Garlic or tomato sauce?', 'contentType' => 'PlainText', ], ], ], ], [ 'name' => 'Type', 'description' => 'The type of pizza to order.', 'priority' => 1, 'sampleUtterances' => [ 'Get me a {Type} pizza.', 'A {Type} pizza please.', 'I\'d like a {Type} pizza.', ], 'slotConstraint' => 'Required', 'slotType' => 'DocPizzaType', 'slotTypeVersion' => '$LATEST', 'valueElicitationPrompt' => [ 'maxAttempts' => 1, 'messages' => [ [ 'content' => 'What type of pizza would you like?', 'contentType' => 'PlainText', ], [ 'content' => 'Vegie or cheese pizza?', 'contentType' => 'PlainText', ], [ 'content' => 'I can get you a vegie or a cheese pizza.', 'contentType' => 'PlainText', ], ], ], ], [ 'name' => 'Crust', 'description' => 'The type of pizza crust to order.', 'priority' => 2, 'sampleUtterances' => [ 'Make it a {Crust} crust.', 'I\'d like a {Crust} crust.', ], 'slotConstraint' => 'Required', 'slotType' => 'DocPizzaCrustType', 'slotTypeVersion' => '$LATEST', 'valueElicitationPrompt' => [ 'maxAttempts' => 1, 'messages' => [ [ 'content' => 'What type of crust would you like?', 'contentType' => 'PlainText', ], [ 'content' => 'Thick or thin crust?', 'contentType' => 'PlainText', ], ], ], ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example shows how to create an intent for ordering pizzas.', 'id' => 'to-create-an-intent-1494358144659', 'title' => 'To create an intent', ], ], 'PutSlotType' => [ [ 'input' => [ 'name' => 'PizzaSauceType', 'description' => 'Available pizza sauces', 'enumerationValues' => [ [ 'value' => 'red', ], [ 'value' => 'white', ], ], ], 'output' => [ 'version' => '$LATEST', 'name' => 'DocPizzaSauceType', 'checksum' => 'cfd00ed1-775d-4357-947c-aca7e73b44ba', 'createdDate' => 1494356442.23, 'description' => 'Available pizza sauces', 'enumerationValues' => [ [ 'value' => 'red', ], [ 'value' => 'white', ], ], 'lastUpdatedDate' => 1494356442.23, ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'This example shows how to create a slot type that describes pizza sauces.', 'id' => 'to-create-a-slot-type-1494357262258', 'title' => 'To Create a Slot Type', ], ], ],];
