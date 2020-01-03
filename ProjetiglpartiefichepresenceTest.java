
import org.junit.Test;
import org.junit.Before;
import org.junit.After;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.is;
import static org.hamcrest.core.IsNot.not;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.remote.RemoteWebDriver;
import org.openqa.selenium.remote.DesiredCapabilities;
import org.openqa.selenium.Dimension;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.interactions.Actions;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;
import org.openqa.selenium.JavascriptExecutor;
import org.openqa.selenium.Alert;
import org.openqa.selenium.Keys;
import java.util.*;
import java.net.MalformedURLException;
import java.net.URL;
public class ProjetiglpartiefichepresenceTest {
  private WebDriver driver;
  private Map<String, Object> vars;
  JavascriptExecutor js;
  @Before
  public void setUp() {
    driver = new ChromeDriver();
    js = (JavascriptExecutor) driver;
    vars = new HashMap<String, Object>();
  }
  @After
  public void tearDown() {
    driver.quit();
  }
  @Test
  public void projetiglpartiefichepresence() {
    driver.get("http://127.0.0.1:8000/RenseignerPresence");
    driver.manage().window().setSize(new Dimension(1024, 546));
    driver.findElement(By.cssSelector(".btn-info")).click();
    driver.findElement(By.cssSelector(".md-form:nth-child(1) > .form-control")).click();
    driver.findElement(By.cssSelector(".md-form:nth-child(1) > .form-control")).sendKeys("Ahmed");
    driver.findElement(By.cssSelector(".md-form:nth-child(2) > .form-control")).click();
    driver.findElement(By.cssSelector(".md-form:nth-child(2) > .form-control")).sendKeys("Ali");
    driver.findElement(By.cssSelector(".md-form:nth-child(3) > .mr-5")).click();
    driver.findElement(By.cssSelector(".md-form:nth-child(3) > .form-control")).sendKeys(Keys.DOWN);
    driver.findElement(By.cssSelector(".md-form:nth-child(3) > .form-control")).sendKeys("30");
    driver.findElement(By.cssSelector(".form-control:nth-child(5)")).click();
    driver.findElement(By.cssSelector(".form-control:nth-child(5)")).sendKeys("0002-01-12");
    driver.findElement(By.cssSelector(".form-control:nth-child(5)")).sendKeys("0020-01-12");
    driver.findElement(By.cssSelector(".form-control:nth-child(5)")).sendKeys("0202-01-12");
    driver.findElement(By.cssSelector(".form-control:nth-child(5)")).sendKeys("2020-01-12");
    driver.findElement(By.id("appt")).click();
    driver.findElement(By.id("appt")).sendKeys("09:00");
    driver.findElement(By.name("fin")).click();
    driver.findElement(By.name("fin")).sendKeys("16:00");
    {
      WebElement element = driver.findElement(By.cssSelector(".text-left"));
      Actions builder = new Actions(driver);
      builder.moveToElement(element).clickAndHold().perform();
    }
    {
      WebElement element = driver.findElement(By.cssSelector(".text-left"));
      Actions builder = new Actions(driver);
      builder.moveToElement(element).perform();
    }
    {
      WebElement element = driver.findElement(By.cssSelector(".text-left"));
      Actions builder = new Actions(driver);
      builder.moveToElement(element).release().perform();
    }
    driver.findElement(By.cssSelector(".btn-primary")).click();
    driver.findElement(By.cssSelector(".btn-secondary")).click();
    {
      WebElement element = driver.findElement(By.cssSelector(".sidebar"));
      Actions builder = new Actions(driver);
      builder.moveToElement(element).clickAndHold().perform();
    }
    {
      WebElement element = driver.findElement(By.cssSelector(".sidebar"));
      Actions builder = new Actions(driver);
      builder.moveToElement(element).perform();
    }
    {
      WebElement element = driver.findElement(By.cssSelector(".sidebar"));
      Actions builder = new Actions(driver);
      builder.moveToElement(element).release().perform();
    }
  }
}
