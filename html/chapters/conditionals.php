<p>
Sometimes (a lot of the time, in fact) you may want to write code that is only executed if certain conditions are met. An online store, for example, will only want to send out a shipping order if the customer's credit card payment was accepted. An online banking system will only allow you to log in if the given password matches the given username. A university web application may check to make sure that a student was admitted and paid tuition before allowing the student to register for classes. In all of these cases, certain conditions must be met for certain processes to run. To program computers to behave like this, programmers must use <em>conditionals</em>. Note that the root of the word "conditionals" is "condition"; this is because the computer checks that the conditions are met before executing the code.
</p>

<h2>The If Statement</h2>

<p>
Conditionals in Python are based around the <code>if</code> statement. The syntax looks like this:
</p>
<p>
<code>if <em>condition</em>:</code>
</p>
<p>
where the <em>condition</em> is code that evaluates to a boolean (e.g., if True:, if False:, if 8&lt;9:, if age&gt;=18:, if username=="bob" and password=="tomato":). The code that runs if the condition is True starts on the following line and is tabbed in, just like the code of a function under its definition.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	if True:
		print("This will always print, because the condition is always True")

	if False:
		print("This will never print, because the condition is always False")

	age = 18 # you can change this
	if age >= 18:
		print("You are an adult. Move out and start paying bills. Congrats!")

	var1 = 259 # you can change this
	var2 = 624 # you can change this
	if var1 > var2:
		print(str(var1) + " is greater than " + str(var2))
	if var1 < var2:
		print(str(var2) + " is greater than " + str(var1))
	if var1 == var2:
		print(str(var2) + " is equal to " + str(var1))

	username = "bob" # you can change this
	password = "tomato" # you can change this
	if username == "bob" and password == "tomato":
		print("Login successful")
		print("Hello, " + username)

	</code>
</div>

<h2>The If-else Statement</h2>

<p>
There are also instances where you will want your program to do one thing if the condtion is met and another thing if it is not met. If a user enters an email address on your website before clicking "Submit", then add the email address to the email list. If the user clicks "Submit" without providing an email address, then show an error message telling the user to enter an email address before clicking "Submit". This is best done by using an if-else statement. After writing an if statement, write a line <code>else:</code>, and under that line write the code (tabbed in) that should be run if the condition in the original if statement is <strong>not</strong> true.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	is_email = False # True if user entered an email, False if user didn't
	
	if is_email:
		print("Email address successfully added to email list")
	else:
		print("Please enter an email address before clicking 'Submit'")
	</code>
</div>

<h2>The If-elif-else Statement</h2>

<p>
Now imagine a case where you want a user to input their age and you print a string like "You are a child", "You are in your teens", "You are in your twenties", "You are in your thirties", and so on. You want the program to print exactly one string for any given age, but there are more than two possible outcomes. You can use an if-elif-else statement. In an in-elif-else statement, the first condition that is true determines the code that is run. Once one condition is true and the code is run, the computer doesn't even look at the other conditions: it already found one, and it will only run one. That's because the "elif" stands for "else if"; it is only considered if the condition from the previous if or elif statement is false.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
	age = 32 # Change this to see the different messages

	if age < 13:
		print("You are a child")
	elif age < 18:
		print("You are a teenager")
	elif age < 20:
		print("You are a young adult")
	elif age < 30:
		print("You are in your twenties")
	elif age < 40:
		print("You are in your thirties")
	elif age < 50:
		print("You are in your forties")
	elif age < 60:
		print("You are in your fifties")
	elif age < 70:
		print("You are in your sixties")
	elif age < 80:
		print("You are in your seventies")
	else:
		print("You are a senior citizen")
	</code>
</div>

<p>
TODO explain how in the code above, when age = 32 it meets the conditions for everything past age < 40, but an if-elif-else will stop checking after it finds the first true condition. 
</p>

<h2>Nesting Conditionals</h2>
<p>
TODO nesting (in functions, in other conditionals)
</p>
