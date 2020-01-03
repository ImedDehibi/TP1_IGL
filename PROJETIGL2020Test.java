
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
public class PROJETIGL2020Test {
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
  public void pROJETIGL2020() {
    driver.get("http://127.0.0.1:8000/");
    driver.manage().window().setSize(new Dimension(1024, 546));
    driver.findElement(By.cssSelector(".btn")).click();
    driver.findElement(By.cssSelector(".form-sm:nth-child(1) > .form-control")).click();
    driver.findElement(By.cssSelector(".form-sm:nth-child(1) > .form-control")).sendKeys("DEHIBI IMED");
    driver.findElement(By.cssSelector(".md-form:nth-child(2) > .form-control")).click();
    driver.findElement(By.cssSelector(".md-form:nth-child(2) > .form-control")).sendKeys("IMED");
    driver.findElement(By.cssSelector(".custom-control:nth-child(1) > .custom-control-label")).click();
    driver.findElement(By.cssSelector(".btn-primary")).click();
    driver.findElement(By.cssSelector(".btn-secondary")).click();
    driver.findElement(By.cssSelector(".navbar-toggler-icon")).click();
    driver.findElement(By.linkText("Home")).click();
    driver.findElement(By.cssSelector(".navbar-toggler-icon")).click();
    driver.findElement(By.linkText("A propos")).click();
    driver.findElement(By.cssSelector(".navbar-toggler-icon")).click();
    driver.findElement(By.linkText("Description")).click();
    driver.findElement(By.cssSelector(".navbar-toggler-icon")).click();
    driver.findElement(By.cssSelector(".form-control")).click();
    driver.findElement(By.cssSelector(".form-control")).sendKeys("IMED");
    driver.findElement(By.cssSelector(".form-control")).sendKeys(Keys.ENTER);
  }
}
