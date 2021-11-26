<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $id)
 * @method static orderBy(string $string, string $string1)
 * @method static create(array $array)
 * @property int category_id
 */
class Product extends Model {
    use HasFactory;
    protected $fillable = ['title','text','img','category_id'];

    public static function best($type) {
        switch ($type) {
            case 1:
                $title = "Членство в локальной группе";
                $img = "pro-1.png";
                $text = "Применяйте упреждающий подход к обеспечению безопасности конечных точек по сравнению с традиционными инструментами управления конечными точками, реализуя управление привилегиями на уровне приложений.
                        <ul>
                            <li>устраните привилегии в учетных записях пользователей;</li>
                            <li>управление привилегиями на уровне пользователя в дополнение к привилегиям приложений и процессов;</li>
                            <li>назначьте учетные записи пользователей для членства в группах;</li>
                            <li>установите ограничения по времени для пользовательских сеансов, автоматически завершая сеанс по истечении этого срока;</li>
                            <li>упрощение рабочих нагрузок ИТ-администратора.</li>
                        </ul>";
                break;
            case 2:
                $title = "Смена пароля";
                $img = "pro-2.png";
                $text = "Покончите с общими паролями, используемыми на бесчисленных конечных точках и инструментах в учетных записях локальных администраторов.
                        <ul>
                            <li>гарантируйте, что каждый пароль уникален для каждого компьютера, учетной записи и дня;</li>
                            <li>управляйте сменой паролей просто и эффективно – данный пароль действителен только на этом компьютере, в этот день и время;</li>
                            <li>отслеживание попыток смены пароля;</li>
                            <li>прогнозируйте будущие итерации паролей без подключения к сети.</li>
                        </ul>";
                break;

            case 3:
                $title = "Контроль над вымогателями";
                $img = "pro-3.png";
                $text = "Обнаруживайте попытки шифрования в режиме реального времени, чтобы остановить вымогателей на их пути с вероятностью успеха почти 100%, в отличие от других технологий
                        <ul>
                            <li>автоматическое определение того, когда процесс намеревается выполнить операцию шифрования, до ее выполнения;</li>
                            <li>остановите процесс и выполните автоматические правила для ответа;</li>
                            <li>определите действия правил на основе стандартов или пороговых значений администратора;</li>
                            <li>храните ключи шифрования для последующего дешифрования.</li>
                        </ul>";
                break;

            case 4:
                $title = "Уаравление приложениями";
                $img = "pro-4.png";
                $text = "Управляйте и контролируйте все ключевые бизнес-приложения с помощью инновационного и простого в использовании портала, используя уникальную технологию управления привилегиями на уровне процессов BestSafe
                        <ul>
                            <li>устанавливайте приложения по требованию или развертывайте их автоматически;</li>
                            <li>пользователи сами выполняют установку программного обеспечения, не обладая правами администратора и не обременяя ИТ-команду;</li>
                            <li>SDM гибко и эффективно развертывает обновления, ремонт, задачи администрирования или обслуживания, аварийное распределение и удаление, без необходимости взаимодействия с пользователем или повышенных привилегий;</li>
                            <li>делегирование административных задач пользователям конечных точек без предоставления административных прав;</li>
                            <li>максимальная безопасность без какого-либо влияния на производительность или производительность.</li>
                        </ul>";
                break;

            default:
                $title = "Белый / серый / черный список";
                $img = "best-1.png";
                $text = "<span>Белый список для корпоративных приложений, серый список для опасных приложений, чёрный список для вредоносных программ</span>
                        <ul>
                            <li>Исключите привилегированные учетные записи и права локального администратора</li>
                            <li>Привилегии на уровне приложений и процессов для выполнения разрешенных административных задач (Белый список)</li>
                            <li>Уменьшите привилегии потенциально опасных приложений (почтовых клиентов, браузеров и т. д. с доступом в Интернет), запретите доступ к конфиденциальным ресурсам, независимо от повышенных привилегий пользователя (Серый список)</li>
                            <li>Остановите выполнение или шифрование файлов вредоносными программами, программами-вымогателями и криптовирусами</li>
                        </ul>";
                break;
        }

        return [
            'title' => $title,
            'img' => $img,
            'text' => $text
        ];
    }

    public static function trust($type) {
        switch ($type) {
            case 1:
                $title = "SSO";
                $img = "pro-5.png";
                $text = "Предоставьте пользователям возможность единого входа в систему, чтобы снять бремя управления разными паролями для каждого целевого приложения и повторного ввода учетных данных.
                        <ul>
                            <li>панель мониторинга пользователя, отображающая все приложения, к которым у пользователя есть права доступа;</li>
                            <li>встроенная проверка подлинности Windows и клиентские сертификаты X. 509 поддерживают доступ к панели мониторинга пользователей без формы входа;</li>
                            <li>федерация удостоверений через протоколы SAML, OpenID Connect и OAuth;</li>
                            <li>предварительно интегрированные приложения, такие как Office 365, G Suite, Salesforce и многие другие.</li>
                        </ul>";
                break;
            case 2:
                $title = "МИД";
                $img = "pro-6.png";
                $text = "<div>Выберите один из множества механизмов многофакторной аутентификации в соответствии с конкретными требованиями различных групп населения, поскольку не существует универсального решения MFA для всех.</div>
                        <ul>
                            <li>аутентификатор Trustelem: мобильное приложение, предлагающее надежное решение для аутентификации, которое является безопасным и простым в использовании. В пределах покрытия сети аутентификатор Trustelem получает push-уведомления. Когда устройство находится в автономном режиме, приложение генерирует 6-значный код. В дополнение к блокировке пользователями своего устройства, приложение может быть защищено от отпечатков пальцев или требовать четырехзначный PIN-ко;</li>
                            <li>аутентификация OTP по SMS: простое и практичное решение, широко известное пользователям в других контекстах;</li>
                            <li>устройства безопасности FIDO 2: могут использоваться через протокол WebAuthn для реализации многофакторной аутентификации на основе физических ключей USB или NFC. WALLIX Trustelem поддерживает все устройства, совместимые с FIDO2, включая устройства, сертифицированные по стандарту ANSSI;</li>
                            <li>аутентификатор Google или любое мобильное приложение поколения OTP, совместимое с RFC 6238, поддерживается WALLIX Trustelem для многофакторной аутентификации.</li>
                        </ul>";
                break;

            case 3:
                $title = "Самообслуживание";
                $img = "pro-7.png";
                $text = "Предложите пользователям решение самообслуживания для упрощения и оптимизации управления учетными данными.
                        <ul>
                            <li>самостоятельный сброс пароля службы Active Directory (SSPR) позволяет пользователям самостоятельно повторно инициализировать свой пароль Active Directory после повторной проверки подлинности с помощью одного или нескольких дополнительных решений, таких как мобильное приложение Trustelem Authenticator, SMS, один или несколько секретных вопросов, ссылка, отправленная по электронной почте, или другие решения;</li>
                            <li>панель мониторинга пользователей предлагает обновить пароль Active Directory либо спонтанно, либо по истечении срока действия;</li>
                            <li>пользователям предлагается ввести процедуры регистрации MFA, когда они получают доступ к своей панели мониторинга или определенному целевому приложению, чтобы регистрация была полностью автономной. Администраторы контролируют, какому пользователю или группе будет предложено автоматически зарегистрироваться в решениях MFA.</li>
                        </ul>";
                break;

            default:
                $title = "Центральный каталог";
                $img = "news-1.jpg";
                $text = "Соберите свои источники идентичности в единую ссылку на идентичность, чтобы легко управлять правами доступа в одном централизованном месте.
                        <ul>
                            <li>Поддержка каталогов Active Directory, Azure AD, LDAP и Google G Suite directory</li>
                            <li>Импортируйте столько каталогов сколько необходимо в вашу платформу WALLIX Trustelem</li>
                            <li>Полный или частичный импорт каталога на основе членства в группе и фильтрации атрибутов</li>
                            <li>Импорт членства в группах и атрибутов пользователей для определения надлежащих политик управления доступом</li>
                        </ul>";
                break;
        }

        return [
            'title' => $title,
            'img' => $img,
            'text' => $text
        ];
    }
}
