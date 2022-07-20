# recipeAssignment


################################################################

Today, you set out on the task of perfecting your milk-dunking cookie recipe. All you have to do is find the right balance of ingredients.

Your recipe leaves room for exactly 100 teaspoons of ingredients. You make a list of the remaining ingredients you could use to finish the recipe (your puzzle input) and their properties per teaspoon:

capacity (how well it helps the cookie absorb milk)
durability (how well it keeps the cookie intact when full of milk)
flavor (how tasty it makes the cookie)
texture (how it improves the feel of the cookie)
calories (how many calories it adds to the cookie)

You can only measure ingredients in whole-teaspoon amounts accurately, and you have to be accurate so you can reproduce your results in the future. The total score of a cookie can be found by adding up each of the properties (negative totals become 0) and then multiplying together everything except calories.

For instance, suppose you have these two ingredients:

Butterscotch: capacity -1, durability -2, flavor 6, texture 3, calories 8
Cinnamon: capacity 2, durability 3, flavor -2, texture -1, calories 3
Then, choosing to use 44 teaspoons of butterscotch and 56 teaspoons of cinnamon (because the amounts of each ingredient must add up to 100) would result in a cookie with the following properties:

A capacity of 44*-1 + 56*2 = 68
A durability of 44*-2 + 56*3 = 80
A flavor of 44*6 + 56*-2 = 152
A texture of 44*3 + 56*-1 = 76

Multiplying these together (68 * 80 * 152 * 76, ignoring calories for now) results in a total score of 62842880, which happens to be the best score possible given these ingredients. If any properties had produced a negative total, it would have instead become zero, causing the whole score to multiply to zero.

Given the ingredients in your kitchen and their properties, what is the total score of the highest-scoring cookie you can make?


--- Part Two, for bonus points :) ---
Your cookie recipe becomes wildly popular! Someone asks if you can make another recipe that has exactly 500 calories per cookie (so they can use it as a meal replacement). Keep the rest of your award-winning process the same (100 teaspoons, same ingredients, same scoring system).

For example, given the ingredients above, if you had instead selected 40 teaspoons of butterscotch and 60 teaspoons of cinnamon (which still adds to 100), the total calorie count would be 40*8 + 60*3 = 500. The total score would go down, though: only 57600000, the best you can do in such trying circumstances.

Given the ingredients in your kitchen and their properties, what is the total score of the highest-scoring cookie you can make with a calorie total of 500?


--- Puzzle input ---
Sprinkles: capacity 2, durability 0, flavor -2, texture 0, calories 3
Butterscotch: capacity 0, durability 5, flavor -3, texture 0, calories 3
Chocolate: capacity 0, durability 0, flavor 5, texture -1, calories 8
Candy: capacity 0, durability -1, flavor 0, texture 5, calories 8

#############################################SOLUTION########################################################

PART-1
Given the ingredients in your kitchen and their properties, what is the total score of the highest-scoring cookie you can make?

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Ingredients  # capacity # durability # flavor # texture # 
++++++++++++ # ++++++++ # ++++++++++ # ++++++ # +++++++ # 
Sprinkles    # 2k1      # 0k1        # -2k1   # 0k1     #    //highest variable is 2k1(capacity)
++++++++++++ # ++++++++ # ++++++++++ # ++++++ # +++++++ # 
Butterscotch # 0k2      # 5k2        # -3k2   # 0k2     #    //highest variable is 5k2(durability)  
++++++++++++ # ++++++++ # ++++++++++ # ++++++ # +++++++ # 
Chocolate    # 0k3      # 0k3        # 5k3    # -1k3    #    //highest variable is 5k3(flavor)   
++++++++++++ # ++++++++ # ++++++++++ # ++++++ # +++++++ # 
Candy        # 0k4      # -1k4       # 0k4    # 5k4     #    //highest variable is 5k4(texture)
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++

CONSTRAINT-1 Your recipe leaves room for exactly 100 teaspoons of ingredients.

CONSTRAINT -2 Sum of property values must be bigger than zero.

CONSTRAINT-3 You need to find the total score of the highest-scoring cookie.

Number of ingredients = 4 

 2k1 + 5k2 + 5k3 + 5k4 = 100tsp (CONSTRAINT-1)
 1*(2k) + 3*(5k) = 100tsp
 //in order to provide max. score
 2k = 1tsp
 5k = 33tsp

Sprinkles = 1tsp
Butterscotch = 33tsp
Chocolate = 33tsp
Candy = 33tsp

A capacity of 1*2 + 33*0 + 33*0 + 33*0 = 2
A durability of 1*0 + 33*5 + 33*0 + 33*-1 = 132
A flavor of 1*-2 + 33*-3 + 33*5 + 33*0 = 64
A texture of 1*0 + 33*0 + 33*-1 + 33*5 = 132

*******************************************
* Highest score => 2*132*64*132 = 2230272 *
*******************************************

PART-2
Given the ingredients in your kitchen and their properties, what is the total score of the highest-scoring cookie you can make with a calorie total of 500?

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Ingredients  # capacity # durability # flavor # texture # calories       

++++++++++++ # ++++++++ # ++++++++++ # ++++++ # +++++++ # +++++++++
Sprinkles    # 2k1      # 0k1        # -2k1   # 0k1     # 3k1            //calories variable is 3k1(capacity)
++++++++++++ # ++++++++ # ++++++++++ # ++++++ # +++++++ # +++++++++
Butterscotch # 0k2      # 5k2        # -3k2   # 0k2     # 3k2            //calories variable is 3k2(durability)  
++++++++++++ # ++++++++ # ++++++++++ # ++++++ # +++++++ # +++++++++
Chocolate    # 0k3      # 0k3        # 5k3    # -1k3    # 8k3            //calories variable is 8k3(flavor)   
++++++++++++ # ++++++++ # ++++++++++ # ++++++ # +++++++ # +++++++++
Candy        # 0k4      # -1k4       # 0k4    # 5k4     # 8k4            //calories variable is 8k4(texture)
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

CONSTRAINT-1 Your recipe leaves room for exactly 100 teaspoons of ingredients.

CONSTRAINT -2 Sum of property values must be bigger than zero

CONSTRAINT-3 Calorie value must be a total of 500.

CONSTRAINT-4 You need to find the total score of the highest-scoring cookie while value of total calories remains 500.


Number of ingredients = 4 

 
 k1 + k2 + k3 + k4 = 100 (CONSTRAINT-1)
 3k1 + 3k2 + 8k3 + 8k4 = 500 calories (CONSTRAINT-3)
 3(k1+ k2) + 8(k3 + k4) = 500
 3(60) + 8(40) = 500 (CONSTRAINT-4)
 
 flavor -> -2k1 + -3k2 + 5k3 + 0k4 >= 1 (CONSTRAINT-2)

 //in order to provide max. score , avoid minus value and and to hold fixed 500 calories;
 
 k1+ k2 = 60
 k3 + k4 = 40

Sprinkles = 25tsp
Butterscotch = 35tsp
Chocolate = 33tsp
Candy = 7tsp

A capacity of   25*2  + 35*0  + 33*0  + 7*0 = 50
A durability of 25*0  + 35*5  + 33*0  + 7*-1 = 168
A flavor of     25*-2 + 35*-3 + 33*5  + 7*0 = 10
A texture of    25*0  + 35*0  + 33*-1 + 7*5 = 2

*****************************************************************
* Highest score with total calorie of 500=> 50*168*10*2 = 168000 *
*****************************************************************
