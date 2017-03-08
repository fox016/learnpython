<p>
The boolean (pronounced BOO-lee-un) data type is arguably the simplest data type. Booleans can have only one of two values: <code>True</code> or <code>False</code>. Booleans are useful for storing any kind of data that is limited to two possible values. For example, a switch is either on (<code>True</code>) or it is off (<code>False</code>). A checkbox is either checked (<code>True</code>) or unchecked (<code>False</code>). A credit card is either current (<code>True</code>) or expired (<code>False</code>).
</p>

<h2>Boolean Operations</h2>

<p>
Just like you can use operations on two numbers to get another number (e.g., 2 + 3 = 5), you can use operations on two booleans to get another boolean. The operations for booleans are <code>and</code>, <code>or</code>, and <code>not</code>. The table below shows what these operations look like in Python and in other programming languages.
</p>

<table class='textbookTable'>
	<thead>
		<tr><th colspan=3>Common Boolean Operations</th></tr>
		<tr><td>Operation (Python)</td><td>Operation (Other)</td><td>Result</td></tr>
	</thead>
	<tbody>
		<tr><td><code>x and y</code></td><td><code>x &amp;&amp; y</code></td><td>And (if <strong>both</strong> are True, it will return True)</td></tr>
		<tr><td></td><td></td><td><code>True and True = True</code></td></tr>
		<tr><td></td><td></td><td><code>True and False = False</code></td></tr>
		<tr><td></td><td></td><td><code>False and True = False</code></td></tr>
		<tr><td></td><td></td><td><code>False and False = False</code></td></tr>
		<tr><td><code>x or y</code></td><td><code>x || y</code></td><td>Or (if <strong>at least one</strong> is True, it will return True)</td></tr>
		<tr><td></td><td></td><td><code>True or True = True</code></td></tr>
		<tr><td></td><td></td><td><code>True or False = True</code></td></tr>
		<tr><td></td><td></td><td><code>False or True = True</code></td></tr>
		<tr><td></td><td></td><td><code>False or False = False</code></td></tr>
		<tr><td><code>not x</code></td><td><code>!x</code></td><td>Not (if x is False it will return True)</td></tr>
		<tr><td></td><td></td><td><code>not False = True</code></td></tr>
		<tr><td></td><td></td><td><code>not True = False</code></td></tr>
	</tbody>
</table>

<p>
Why would you use these operations? Pretend you're making a website where only people ages 12+ can join, and they have to check a box saying that they have read the terms and conditions. When they click the button to join, you want to check if they meet both conditions:
</p>
<p>
<code>is_old_enough = True</code><br/>
<code>is_box_checked = True</code><br/>
<code>is_valid_user = is_old_enough and is_box_checked</code><br/>
</p>

<p>
In the case above, <code>is_valid_user</code> will evaluate to <code>True</code> because both operands are <code>True</code>. If either <code>is_old_enough</code> is <code>False</code> or <code>is_box_checked</code> is <code>False</code>, then <code>is_valid_user</code> is also <code>False</code>. These operations are very useful to understand when programming <a href='?chapter=conditionals'>flow control</a> and <a href='?chapter=iteration'>loops</a>, which will be discussed in later chapters.
</p>

<p>
Use the coding exercise below to change the values of <code>x</code> and <code>y</code> to better understand how boolean operations work.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		# Change the values of x and y
		x = True
		y = True

		# This code performs the operations
		x_and_y = x and y
		x_or_y = x or y
		not_x = not x

		# This prints the results
		print("x = " + str(x) + ", y = " + str(y))
		print("x and y = " + str(x_and_y))
		print("x or y = " + str(x_or_y))
		print("not x = " + str(not_x))
		print("")
	</code>
</div>

<h2>Number Comparisons</h2>

<p>
The last chapter discussed number operations that produce numbers. Well, there are also number operations that produce booleans. The answer to the question "is <code>x</code> less than <code>y</code>?" for two numbers <code>x</code> and <code>y</code> is going to be a boolean: <code>True</code> or <code>False</code>.
</p>

<table class='textbookTable'>
	<thead>
		<tr><th colspan=2>Common Number Comparisions</th></tr>
		<tr><td>Operation</td><td>Result</td></tr>
	</thead>
	<tbody>
		<tr><td><code>x &gt; y</code></td><td>True if x is greater than y</td></tr>
		<tr><td><code>x &gt;= y</code></td><td>True if x is greater than or equal to y</td></tr>
		<tr><td><code>x &lt; y</code></td><td>True if x is less than y</td></tr>
		<tr><td><code>x &lt;= y</code></td><td>True if x is less than or equal to y</td></tr>
		<tr><td><code>x == y</code></td><td>True if x is equal to y</td></tr>
		<tr><td><code>x != y</code></td><td>True if x is not equal to y</td></tr>
	</tbody>
</table>

<p>Change the values in the coding exercise below to make every number comparison evaluate to <code>False</code>.</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		# Change these values
		# Make the exercise print False 6 times
		a = 4
		b = 6
		c = 3
		d = 4
		e = 7
		f = 3

		# This code performs the operations (don't change)
		var1 = a > b
		var2 = a >= d
		var3 = c < e
		var4 = c <= f
		var5 = a == d
		var6 = e != c

		# This prints the results (don't change)
		print(var1)
		print(var2)
		print(var3)
		print(var4)
		print(var5)
		print(var6)
		print("")
	</code>
	<code data-type="sct">
		test_output_contains("False\nFalse\nFalse\nFalse\nFalse\nFalse", False, "Output should show False 6 times")
		success_msg("Great job!")
	</code>
	<div data-type="hint">
		<ul>
			<li>Make <code>a</code> less than or equal to <code>b</code></li>
			<li>Make <code>a</code> less than <code>d</code></li>
			<li>Make <code>e</code> equal to <code>c</code></li>
			<li>Make <code>c</code> greater than <code>f</code></li>
		</ul>		
	</div>
</div>
